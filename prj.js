// --- BOTÃO "Ir para Cadastro" (só existe no index.html) ---
const btnCadastro = document.getElementById('btnCadastro');
if (btnCadastro) {
    btnCadastro.addEventListener('click', () => {
        window.location.href = "cadastro.html";
    });
}

// --- BOTÃO "Ver Carros" (se você usar no index.html) ---
const btnCarros = document.getElementById('btnCarros');
if (btnCarros) {
    btnCarros.addEventListener('click', () => {
        window.location.href = "produto.php"; 
    });
}

// --- BOTÃO VOLTAR (só existe no cadastro.html) ---
const vlt = document.getElementById('vlt');
if (vlt) {
    vlt.addEventListener('click', () => {
        window.location.href = "prj.html";
    });
}