// public/assets/js/app.js

// Check session on protected pages
document.addEventListener('DOMContentLoaded', () => {
    const protectedPaths = ['/dashboard', '/tickets'];
    const currentPath = window.location.pathname;

    if (protectedPaths.some(path => currentPath.startsWith(path))) {
        const session = localStorage.getItem('ticketapp_session');
        if (!session) {
            showToast('Your session has expired — please log in again.', 'error');
            setTimeout(() => window.location.href = '/auth/login', 1500);
            return;
        }

        // Optional: expire after 1 hour
        try {
            const data = JSON.parse(session);
            if (Date.now() - data.loginTime > 3600000) {
                localStorage.removeItem('ticketapp_session');
                showToast('Session expired. Please log in again.', 'warning');
                setTimeout(() => window.location.href = '/auth/login', 1500);
            }
        } catch (e) {
            localStorage.removeItem('ticketapp_session');
            window.location.href = '/auth/login';
        }
    }

    // Logout button (will be added later)
    const logoutBtn = document.getElementById('logout-btn');
    if (logoutBtn) {
        logoutBtn.addEventListener('click', (e) => {
            e.preventDefault();
            localStorage.removeItem('ticketapp_session');
            showToast('Logged out successfully.', 'info');
            setTimeout(() => window.location.href = '/', 1000);
        });
    }
});