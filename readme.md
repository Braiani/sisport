<p align="center"><img src="http://braianitech.tk/img/bg-home.png"></p>

<p align="center">
<a href="https://github.com/Braiani/sisport-voyager"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Sobre o Sisport

O Sisport é um sistema de controle de portarias emitidas do campus Campo Grande do [IFMS](http://ifms.edu.br), desenvolvido para o uso da DIRGE do campus com a intenção de que todos os servidores tenham acesso e possam conhecer a quais portarias está vinculado.

Esse projeto visa possibilitar _em versões futuras_ a inclusão da protaria emitida no sistema, bem como a emissão de declarações de particiação de forma automática após finalizada e aprovada uma portaria.

Na versão __atual__ do sisport é possível criar usuários com perfil `Servidor`, `DIRGE` e `Administrador`. Ainda, o servidor que já esteja cadastrado no sistema como uma pessoa física, pode acessar o sistema utilizando o SIAPE como credencial:

```js
usermane: siape
senha: siape
```

## Estrutura do sistema

Esse sistema está sendo desenvolvido utilizando-se o [Laravel](http://laravel.com) e [Voyager](https://laravelvoyager.com/).

## Contribuições

Obrigado por se interessar em contribuir com o sistema de controle de emissões de portarias. Para isso, basta fazer um `fork` desse repositório, e enviar um `PULL REQUEST`.

## License

Esse projeto está licensiado sobre a licença open-source software [MIT license](https://opensource.org/licenses/MIT).
