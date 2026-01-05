const showFormBtn = document.getElementById("showFormBtn");
const formContainer = document.getElementById("formContainer");
const form = document.getElementById("gameForm");
const collection = document.getElementById("collection");

// SHOW FORM
showFormBtn.addEventListener("click", function () {
  formContainer.style.display = "flex";
});

// ADD GAME
form.addEventListener("submit", function (e) {
  e.preventDefault();

  const formData = new FormData();
  formData.append("name", document.getElementById("name").value);
  formData.append("platform", document.getElementById("platform").value);
  formData.append("note", document.getElementById("note").value);
  formData.append("image", document.getElementById("image").files[0]);

  fetch("save_game.php", {
    method: "POST",
    body: formData,
  })
    .then((res) => res.json())
    .then((data) => {
      if (!data.success) {
        alert(data.error);
        return;
      }

      const card = document.createElement("div");
      card.className = "game-card";
      card.innerHTML = `
        <div class="thumb"><img src="uploads/games/${data.image}" width="150"></div>
        <div class="info">
        <strong id="game_title">${data.name}</strong><br>
        Platform: ${data.platform}<br>
        ${data.note}
        </div>
      `;

      collection.appendChild(card);
      form.reset();
      formContainer.style.display = "none";
    });
});

// LOAD GAMES
function loadGames() {
  fetch("loadGame.php")
    .then((res) => res.json())
    .then((games) => {
      collection.innerHTML = "";

      games.forEach((game) => {
        const card = document.createElement("div");
        card.className = "game-card";
        card.innerHTML = `
          <div class="thumb"><img src="uploads/games/${game.image}" width="150"></div>
          <div class="info">
          <strong id="game_title" >${game.name}</strong><br>
          Platform: ${game.platform}<br>
          
          ${game.note}
          </div>
        `;
        collection.appendChild(card);
      });
    });
}

window.onload = loadGames;
