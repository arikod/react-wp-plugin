import { StrictMode } from 'react'
import { createRoot } from 'react-dom/client'
import App from './App.jsx'

document.addEventListener('DOMContentLoaded', function () {
    const element = document.getElementById('arikod-admin-app');

    if (typeof element !== 'undefined' && element !== null) {
        createRoot(document.getElementById('arikod-admin-app')).render(
            <StrictMode>
                <App />
            </StrictMode>,
        )
    }
})


