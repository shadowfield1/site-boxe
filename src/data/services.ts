import { Service } from '../utils/types';
import { Dumbbell, Timer, Sword } from 'lucide-react';

export const services: Service[] = [
  {
    title: 'Boxe Française Savate',
    description: 'Apprenez l\'art de la boxe française avec nos instructeurs qualifiés.',
    icon: Sword,
  },
  {
    title: 'Kickboxing',
    description: 'Développez votre force et votre technique avec nos cours de kickboxing.',
    icon: Sword,
  },
  {
    title: 'Cross-Training',
    description: 'Améliorez votre condition physique avec nos séances de cross-training intensives.',
    icon: Timer,
  },
];