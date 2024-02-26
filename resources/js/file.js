var profileMenu = document.querySelector(".online");
var userMenu = document.querySelector(".user-menu");

let profileDetail = document.querySelector(".profile-details");
let showMoreLink = document.getElementById("showMoreLink");

profileMenu.onclick = function ToggleUserMenu() {
    userMenu.classList.toggle("display-menu");
};

function toggleProfileActivity() {
    profileDetail.classList.toggle("open-profile");

    if (profileDetail.classList.contains("open-profile")) {
        showMoreLink.innerHTML = `Show <b>-</b>`;
    } else {
        showMoreLink.innerHTML = `Show <b>+</b>`;
    }
}
