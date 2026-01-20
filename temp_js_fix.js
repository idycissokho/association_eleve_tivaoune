// Navigation functions
function hideAllSections() {
    const sections = ['dashboard-content', 'gallery-content', 'members-content', 'profile-content'];
    sections.forEach(sectionId => {
        const section = document.getElementById(sectionId);
        if (section) section.style.display = 'none';
    });
}

function showDashboardSection() {
    hideAllSections();
    document.getElementById('dashboard-content').style.display = 'block';
}

function showGallerySection() {
    hideAllSections();
    document.getElementById('gallery-content').style.display = 'block';
}

function showMembersSection() {
    hideAllSections();
    document.getElementById('members-content').style.display = 'block';
}

function showProfileSection() {
    hideAllSections();
    document.getElementById('profile-content').style.display = 'block';
}