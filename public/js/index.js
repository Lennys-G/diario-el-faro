console.log("Hola mundo");

/* Reloj */
function updateDateTime() {
    const date = new Date();
    const getCurrentDate = date.toLocaleString();

    const showCurrentDate = document.getElementById("currentDate");
    showCurrentDate.innerHTML = getCurrentDate;
}
setInterval(updateDateTime, 1000);

/* Llamada a la API */
const fetch_data = async function (URL) {
    const abortController = new AbortController();

    try {
        const response = await fetch(URL, { signal: abortController.signal });
        if (!response.ok) {
            throw new Error(
                "No se ha podido establecer conexión con el servidor"
            );
        }

        const data = await response.json();
        if (!data || data.length === 0) {
            throw new Error("No hay información para mostrar");
        }

        if (data) {
            return data; // Devolver datos
        } else {
            throw new Error("No hay información para mostrar");
        }
    } catch (error) {
        console.error("Error en la recuperación de datos:", error);
        throw error;
    } finally {
        // Liberar recursos del AbortController
        abortController.abort();
    }
};

/* ---------------- Manejadores ---------------- */

/* carrusel */
const handlerSectionCarousel = async function (
    url,
    section,
    styleClass = null
) {
    const URL = `/data/${url}.json`;
    const data = await fetch_data(URL);
    // console.log(data);

    const sectionGeneralNews = document.getElementById(`${section}`);
    data.articles.forEach((article) => {
        sectionGeneralNews.innerHTML += `
         <div class="carousel-item ${styleClass}">
            <img
              src="${article.urlToImage}"
              class="d-block w-100" alt="...">
              <div class="carousel-caption d-md-block">
              <h5>${article.title}</h5>
              <a href="${article.url}" target="_blank" class="btn btn-primary btn-sm">Leer más</a>
              </div>
         </div>
    `;
    });
};
// handlerSectionCarousel("dataGeneral", "container-carousel", "active");

/* Sección lateral de noticias  */
const handlerSectionLateralNews = async function (
    url,
    section,
    styleClass = null
) {
    const URL = `/data/${url}.json`;
    const data = await fetch_data(URL);
    // console.log(data);

    const sectionGeneralNews = document.getElementById(`${section}`);
    let counter = 0;
    data.articles.forEach((article) => {
        if (counter < 4) {
            sectionGeneralNews.innerHTML += `
        <div class="${styleClass} mt-2">
          <div class="row">
            <div class="col-md-5">
              <img class="d-block w-100 h-100" src="${article.urlToImage}" alt="">
            </div>
            <div class="col-md-7">
              <div class="card-block">
                <h4 class="card-title">${article.title}</h4>
                <a href="${article.url}" target="_blank" class="btn btn-primary btn-sm">Leer más</a>
              </div>
            </div>
          </div>
        </div>
    `;
            counter++;
        }
    });
};
// handlerSectionLateralNews("dataBusiness", "businessNews", "card");

/* Sección de noticias horizontal */
const handlerSectionNews = async function (url, section) {
    const URL = `/data/${url}.json`;
    const data = await fetch_data(URL);
    // console.log(data);

    const sectionGeneralNews = document.getElementById(`${section}`);
    let counter = 0;
    data.articles.forEach((article) => {
        if (counter < 4) {
            sectionGeneralNews.innerHTML += `
        <div class="card cardArticle col-md-3 col-sm-4">
            <img
              src="${article.urlToImage}" alt="...">
            <div class="card-body">
              <h4 class="card-title">${article.title}</h4>
             <div class="footerCard">
                <a href="${article.url}" target="_blank" class="btn btn-primary btn-sm">Leer más</a>
             </div>
            </div>
          </div>
    `;
            counter++;
        }
    });
};
/* handlerSectionNews("dataSports", "sportsNews");
handlerSectionNews("dataScience", "scienceNews");
handlerSectionNews("dataHealth", "healthNews");
handlerSectionNews("dataEntertainment", "entertainmentNews");
handlerSectionNews("dataAdvertisements", "advertisements"); */
