{include "templates/header.tpl"}
{include "templates/nav.tpl"}
<section class="form">
    <form action="verify" method="POST" class="box">
        <h1>Login</h1>
        <div>
            <input type="text" name="email" id="email" placeholder="Email" required>
        </div>
        <div>
        <input type="password" name="password" placeholder="Password" id="password" required>
        </div>
        
        <button type="submit">Acceder</button>
        <h1>{$error}</h1>
    </form>
    
   
    <div> 
        <a class="buttons" href="Register">Registrarse</a>
    </div>
</section>



{include "templates/footer.tpl"}

