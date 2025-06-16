<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Sistema de Matrícula</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">
  <div id="app" class="w-full max-w-md p-6 bg-white shadow-lg rounded space-y-6">
    
    <!-- LOGIN -->
    <section id="login-section" class="space-y-4">
      <h2 class="text-2xl font-bold text-center text-blue-600">Login</h2>
      <input type="text" id="usuario" placeholder="Usuário" class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500" />
      <input type="password" id="senha" placeholder="Senha" class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500" />
      <button onclick="fazerLogin()" class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700">Entrar</button>
    </section>

    <!-- MATRÍCULA -->
    <section id="matricula-section" class="hidden space-y-4">
      <h2 class="text-2xl font-bold text-center text-green-600">Matricular Aluno</h2>
      <input type="text" id="nomeAluno" placeholder="Nome do aluno" class="w-full px-4 py-2 border rounded" />
      <input type="text" id="cursoAluno" placeholder="Curso" class="w-full px-4 py-2 border rounded" />
      <button onclick="avancarParaQuestionario()" class="w-full bg-green-600 text-white py-2 rounded hover:bg-green-700">Avançar</button>
    </section>

    <!-- QUESTIONÁRIO -->
    <section id="questionario-section" class="hidden space-y-4">
      <h2 class="text-2xl font-bold text-center text-purple-600">Questionário</h2>
      <textarea id="resposta" placeholder="Digite sua resposta..." rows="5" class="w-full px-4 py-2 border rounded"></textarea>
      <button onclick="gerarPDF()" class="w-full bg-purple-600 text-white py-2 rounded hover:bg-purple-700">Gerar PDF</button>
      <a id="downloadLink" class="block text-center text-blue-700 underline hidden" download="questionario.pdf">Baixar PDF</a>
    </section>

  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
  <script src="script.js"></script>
</body>
</html>
