<?php


function validaNome(string $nome) : bool
{
    if(empty($nome))
    {
        setarMensagemErro('O nome não pode ser vazio');
        return false;
    }
    
    else if(strlen($nome) <= 3)
    {
        setarMensagemErro('O nome não pode conter menos q 3 caracteres');
        return false;
    }
    
    else if(strlen($nome) > 50)
    {
        setarMensagemErro('O nome é muito extenso');
        return false;
    }
    return true;

}

function validaIdade(string $idade) : bool
{
    if(!is_numeric($idade))
    {
        setarMensagemErro('informe um número para a idade');
        return false;
    }
    return true;
}





