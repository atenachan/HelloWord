// Chaves de configurações do Firebase 
const firebaseConfig = {
    apiKey: "AIzaSyAu9ieqx08Vx_44zTuX-kGTHY8QbbPD5IU",
    authDomain: "blog-helloword-49172.firebaseapp.com",
    projectId: "blog-helloword-49172",
    storageBucket: "blog-helloword-49172.appspot.com",
    messagingSenderId: "962302076677",
    appId: "1:962302076677:web:696cd33d6c72310852796c"
  };

// Inicializa o Firebase
firebase.initializeApp(firebaseConfig);

// Inicializa o Firebase Authentication

// Inicializa o Firebase
firebase.initializeApp(firebaseConfig);

// Inicializa o Firebase Authentication
const auth = firebase.auth();

// Identifica elementos do HTML para interação
const userAccess = document.getElementById('userAccess');
const userImg = document.getElementById('userImg');
const userIcon = document.getElementById('userIcon');
const userLabel = document.getElementById('userLabel');

// Monitora se houve mudanças na autenticação do usuário
firebase.auth().onAuthStateChanged((user) => {
    if (user) {
        // Se alguém se logou, faça isso...
        // Chama a função que trata o usuário logado
        isLogged(user);
    } else {
        // Se alguém deslogou, faça isso...
        // Chama a função que trata o usuário NÃO logado
        notLogged();
    }
});

// Função que trata o usuário logado
function isLogged(user) {
    console.log(user);
}

// Função que trata o usuário NÃO logado 
function notLogged() {
    // Altera href do link
    userAccess.href = `login.php?ref=${location.href}`;
    // Altera title do link
    userAccess.title = 'Logue-se';
    // Oculta a imagem do usuário
    userImg.style.display = 'none';
    // Mostra o ícone de login
    userIcon.style.display = 'inline';
    // Altera a label para entrar
    userLabel.innerHTML = 'Entrar';
}