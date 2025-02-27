document.querySelectorAll(".tab").forEach((button) => {
  button.addEventListener("click", function () {
    const section = this.getAttribute("data-section");

    // Меняем заголовок h1
    const header = document.querySelector(".profile-menu-buttons h1");
    const breadcrumb = document.querySelector(
      ".news-content-spans span:last-of-type"
    ); // Берём последний <span>

    let sectionTitle = "Выберите раздел";
    switch (section) {
      case "overview":
        sectionTitle = "Общие сведения";
        break;
      case "personal":
        sectionTitle = "Личные данные";
        break;
      case "orders":
        sectionTitle = "История покупок";
        break;
      case "favorite":
        sectionTitle = "Избранное";
        break;
      case "change_pass":
        sectionTitle = "Сменить пароль";
        break;
    }

    header.textContent = sectionTitle;
    breadcrumb.textContent = sectionTitle; // Меняем текст в последнем <span>

    // Загружаем данные в контентный блок
    fetch(`/profile/getSection.php?section=${section}`)
      .then((response) => response.text())
      .then((data) => {
        document.getElementById("content").innerHTML = data;
      })
      .catch((error) => console.error("Ошибка загрузки:", error));
  });
});
