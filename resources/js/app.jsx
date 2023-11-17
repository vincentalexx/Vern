// app.jsx

import './bootstrap';
import '../css/app.css';

import { createRoot } from 'react-dom/client';
import { createInertiaApp } from '@inertiajs/react';
import { BrowserRouter } from 'react-router-dom';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';

const appName = import.meta.env.VITE_APP_NAME || 'Laravel';

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) => resolvePageComponent(`./Pages/${name}.jsx`, import.meta.glob('./Pages/**/*.jsx')),
    setup({ el, App, props }) {
        const root = createRoot(el);

        // Wrap the entire app with BrowserRouter
        root.render(
            <BrowserRouter>
                <App {...props} />
            </BrowserRouter>
        );
    },
    progress: {
        color: '#4B5563',
    },
});
