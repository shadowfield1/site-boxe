import React from 'react';
import { Service } from '../../utils/types';

interface ServiceCardProps {
  service: Service;
}

export function ServiceCard({ service }: ServiceCardProps) {
  const Icon = service.icon;
  
  return (
    <div className="bg-white rounded-lg p-8 shadow-lg hover:shadow-xl transition duration-300">
      <div className="flex justify-center mb-6">
        <Icon className="h-12 w-12 text-blue-600" />
      </div>
      <h3 className="text-xl font-bold text-gray-900 mb-4 text-center">
        {service.title}
      </h3>
      <p className="text-gray-600 text-center">{service.description}</p>
    </div>
  );
}