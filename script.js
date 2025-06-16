async function gerarPDF() {
  const { jsPDF } = window.jspdf;
  const doc = new jsPDF();

  const nome = document.getElementById('nomeAluno').value;
  const curso = document.getElementById('cursoAluno').value;
  const resposta = document.getElementById('resposta').value;

  doc.setFontSize(12);
  doc.text(`Aluno: ${nome}`, 10, 10);
  doc.text(`Curso: ${curso}`, 10, 20);
  doc.text('Resposta:', 10, 30);
  doc.text(resposta, 10, 40);

  const pdfBlob = doc.output('blob');
  const link = document.getElementById('downloadLink');
  link.href = URL.createObjectURL(pdfBlob);
  link.classList.remove('hidden');
}
