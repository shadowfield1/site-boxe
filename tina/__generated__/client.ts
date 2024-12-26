import { createClient } from "tinacms/dist/client";
import { queries } from "./types";

export const client = createClient({ 
  url: 'https://content.tinajs.io/content/6ea50c5fa8b41a88defeaeeb4d25837ccc27a685/github/0a2ad48a-564f-45e0-8bfe-9bfebb7616b8',
  token: process.env.TINA_TOKEN,
  queries,
});

export default client;