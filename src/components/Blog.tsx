import React from 'react';
import { usePosts } from '../hooks/usePosts';
import { SectionHeader } from './ui/SectionHeader';
import { BlogCard } from './blog/BlogCard';

export default function Blog() {
  const posts = usePosts();

  return (
    <section id="actualites" className="py-20 bg-gray-50">
      <div className="max-w-7xl mx-auto px-4">
        <SectionHeader
          title="Actualités"
          subtitle="Restez informé des dernières nouvelles du centre"
        />
        <div className="grid md:grid-cols-3 gap-8">
          {posts.map((post, index) => (
            <BlogCard key={index} post={post} />
          ))}
        </div>
      </div>
    </section>
  );
}