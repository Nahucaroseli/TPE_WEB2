<section class="navbar">
    <nav>
        <li><a href="Juego">Juegos</a></li>
        <li><a href="Genero">Generos</a></li>
        {if !isset($smarty.session.logged)}
            <li><a href="Login">Login</a></li>
        {/if}
        {if isset($smarty.session.isAdmin)}
            <li><a href="Usuario">Usuarios</a></li>
        {/if}
    </nav>
</section>