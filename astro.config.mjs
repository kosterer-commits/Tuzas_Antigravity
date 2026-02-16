// @ts-check
import { defineConfig } from 'astro/config';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
  site: 'https://kosterer-commits.github.io',
  base: '/Tuzas_Antigravity/',
  vite: {
    plugins: [tailwindcss()]
  }
});
