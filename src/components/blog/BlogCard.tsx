import React from 'react';
import { Post } from '../../utils/types';

interface BlogCardProps {
  post: Post;
}

export function BlogCard({ post }: BlogCardProps) {
  return (
    <div className="bg-white rounded-lg overflow-hidden shadow-lg">
      <img
        src={post.image}
        alt={post.title}
        className="w-full h-48 object-cover"
      />
      <div className="p-6">
        <p className="text-sm text-gray-500 mb-2">{post.date}</p>
        <h3 className="text-xl font-bold text-gray-900 mb-2">
          {post.title}
        </h3>
        <p className="text-gray-600">{post.description}</p>
        <a
          href="#"
          className="inline-block mt-4 text-blue-600 hover:text-blue-700 font-semibold"
        >
          Lire la suite →
        </a>
      </div>
    </div>
  );
}