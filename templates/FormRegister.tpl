{include "templates/header.tpl"}
{include "templates/nav.tpl"}

<section class="form">
    <form action="RegisterPage" method="POST" class="box">
        <h1>Registrarse</h1>
        <div>
            <input type="text" name="email" id="email" placeholder="Email" required>
        </div>
        <div>
             <input type="password" name="password" placeholder="Password" id="password" required>
        </div>
        
        <button type="submit">Registrarse</button>
    </form>
</section>

{include "templates/footer.tpl"}