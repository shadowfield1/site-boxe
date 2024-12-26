import { StrictMode } from 'react';
import { createRoot } from 'react-dom/client';
import { TinaProvider } from 'tinacms/dist/react';
import { TinaEditProvider } from 'tinacms/dist/edit-state';
import { client } from '../tina/__generated__/client';
import App from './App.tsx';
import './index.css';

createRoot(document.getElementById('root')!).render(
  <StrictMode>
    <TinaProvider client={client}>
      <TinaEditProvider>
        <App />
      </TinaEditProvider>
    </TinaProvider>
  </StrictMode>
);