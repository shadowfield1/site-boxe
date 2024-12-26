import { useTina } from 'tinacms/dist/react';
import { Post } from '../utils/types';

export const usePosts = () => {
  const { data } = useTina({
    query: `query GetPosts {
      postConnection {
        edges {
          node {
            title
            date
            description
            image
          }
        }
      }
    }`,
    variables: {},
  });

  return data?.postConnection?.edges?.map(edge => ({
    title: edge.node.title,
    date: new Date(edge.node.date).toLocaleDateString('fr-FR'),
    description: edge.node.description,
    image: edge.node.image,
  })) as Post[];
};