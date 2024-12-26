import React from 'react';

export default function Hero() {
  return (
    <div className="relative h-screen">
      <div 
        className="absolute inset-0 bg-cover bg-center"
        style={{
          backgroundImage: 'url("https://images.unsplash.com/photo-1549576490-b0b4831ef60a?auto=format&fit=crop&q=80")',
        }}
      >
        <div className="absolute inset-0 bg-black opacity-50"></div>
      </div>
      
      <div className="relative h-full flex items-center justify-center text-center px-4">
        <div className="max-w-3xl">
          <h1 className="text-4xl md:text-6xl font-bold text-white mb-6">
            Centre Sportif Multisports Béarnais
          </h1>
          <p className="text-xl md:text-2xl text-white mb-8">
            Découvrez la boxe française, le kickboxing et le cross-training dans un environnement professionnel
          </p>
          <a
            href="#contact"
            className="inline-block bg-blue-600 text-white px-8 py-3 rounded-lg text-lg font-semibold hover:bg-blue-700 transition duration-300"
          >
            Rejoignez-nous
          </a>
        </div>
      </div>
    </div>
  );
}