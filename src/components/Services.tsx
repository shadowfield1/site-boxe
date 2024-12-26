import React from 'react';
import { services } from '../data/services';
import { SectionHeader } from './ui/SectionHeader';
import { ServiceCard } from './services/ServiceCard';

export default function Services() {
  return (
    <section id="services" className="py-20 bg-gray-50">
      <div className="max-w-7xl mx-auto px-4">
        <SectionHeader
          title="Nos Services"
          subtitle="Découvrez nos différentes disciplines sportives"
        />
        <div className="grid md:grid-cols-3 gap-8">
          {services.map((service, index) => (
            <ServiceCard key={index} service={service} />
          ))}
        </div>
      </div>
    </section>
  );
}