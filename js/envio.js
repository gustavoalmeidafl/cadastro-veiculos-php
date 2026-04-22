document.getElementById("formVeiculo").addEventListener("submit", function(e) {
  e.preventDefault();

  const formData = new FormData(this);

  fetch("php/inserir.php", {
    method: "POST",
    body: formData
  })
  .then(res => res.text())
  .then(data => alert(data));
});