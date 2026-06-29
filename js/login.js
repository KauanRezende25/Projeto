function mostrarSenha(olho, senha) 
{
    let eyeLogin
    let senhaLogin

    senhaLogin = document.getElementById(senha)
    eyeLogin = document.getElementById(olho)
    if(senhaLogin.type === "password")
    {
        senhaLogin.setAttribute('type', 'text')
        eyeLogin.classList.remove('bi-eye')
        eyeLogin.classList.add('bi-eye-slash')
    }
    else
    {
        senhaLogin.setAttribute('type', 'password')
        eyeLogin.classList.add('bi-eye')
        eyeLogin.classList.remove('bi-eye-slash')
    }
}