/**
 * Toggle the aside by adding and removing the display style
 */
function openSideMenu(event) {
    const linkButton = document.getElementById('link-button');
    const linkMenu = document.getElementById('link-menu');
    const isHidden = linkMenu.classList.contains('d-none');

    linkMenu.classList.toggle('d-none', !isHidden);
    linkMenu.classList.toggle('d-block', isHidden);

    linkButton.innerText = isHidden ? "Close links" : "Open links";
    linkButton.classList.toggle('button', isHidden);
    linkButton.classList.toggle('ghost-button', !isHidden);
}
