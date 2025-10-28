// public/assets/js/toast.js
window.showToast = (message, type = 'info') => {
    const colors = {
        success: 'bg-green-500',
        error: 'bg-red-500',
        info: 'bg-blue-500',
        warning: 'bg-amber-500'
    };

    const toast = document.createElement('div');
    toast.className = `text-white ${colors[type]} px-6 py-3 rounded-lg shadow-lg flex items-center space-x-2 transform translate-x-full transition-transform duration-300`;
    toast.innerHTML = `
        <span>${message}</span>
        <button onclick="this.parentElement.remove()" class="ml-4 text-white opacity-70 hover:opacity-100">&times;</button>
    `;

    document.getElementById('toast-container').appendChild(toast);

    // Animate in
    setTimeout(() => toast.classList.remove('translate-x-full'), 100);

    // Auto remove
    setTimeout(() => {
        toast.classList.add('translate-x-full');
        toast.addEventListener('transitionend', () => toast.remove());
    }, 3000);
};

