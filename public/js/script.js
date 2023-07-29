// change image if klik
function changeImage(fileName) {
  let img = document.querySelector("#bannerImage");
  img.setAttribute("src", fileName);
}

// visi misi


// live search
const search = () => {
  const searchBox = document.getElementById("search-item").value.toUpperCase();
  const newsList = document.getElementById("news-list");
  const newsQuery = document.querySelectorAll(".news-query");
  const newsTitle = newsList.getElementsByTagName("h4");

  for (let i = 0; i < newsTitle.length; i++) {
    let match = newsQuery[i].getElementsByTagName("h4")[0];

    if (match) {
      let textValue = match.textContent || match.innerHTML;

      if (textValue.toUpperCase().indexOf(searchBox) > -1) {
        newsQuery[i].style.display = "";
      } else {
        newsQuery[i].style.display = "none";
      }
    }
  }
};

// contact form
const contactForm = document.getElementById("contact-form");

contactForm.addEventListener("submit", function (e) {
  e.preventDefault();

  const url = e.target.action;
  const formData = new FormData(contactForm);

  fetch(url, {
    method: "POST",
    body: formData,
    mode: "no-cors",
  })
    .then(() => {
      //  url success
      window.location.href = "/success.html";
    })
    .catch((e) => alert("Error occured"));
});
