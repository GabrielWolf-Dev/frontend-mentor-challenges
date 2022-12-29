const phrase = document.querySelector(".box-quote__quote");
const titleId = document.querySelector('.box-quote__title');
const button = document.querySelector(".box-quote__button");

// Event Listeners
button.addEventListener("click", quoteGenerated);

// Helpers
async function quoteGenerated() {
  const { id, advice } = await getRandomQuotes();

  titleId.textContent = `advice # ${id}`;
  phrase.textContent = advice;
}

async function getRandomQuotes() {
  const URL = "https://api.adviceslip.com/advice";
  phrase.textContent = "Carregando...";
  titleId.textContent = "advice # ...";

  try {
    const response = await fetch(URL);
    const { slip } = await response.json();

    return await slip;
  } catch (error) {
    phrase.textContent =
      "Ocorreu algum erro ao carregar uma frase na base de dados :(";

    console.error(error.message);
  }
}

// Initial Quote
window.onload = quoteGenerated();
