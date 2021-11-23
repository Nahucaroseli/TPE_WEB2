{include "templates/header.tpl"}
{include "templates/nav.tpl"}
<div>
    <table>
        <thead>
            <th>Email</th>
            <th>Es admin</th>  
        </thead>  
            <tbody>
                {foreach from=$usuarios item=$usuario}
                    <tr>
                        <td>{$usuario->email}</td>
                        <td>{$usuario->isAdmin}</td>
                        <td>
                            {if $usuario->isAdmin == 1}
                            <form method="POST" action="editarPermiso/{$usuario->id_usuario}">
                                <input type="text" name="isAdmin"> 
                                <input type="hidden" name="id_usuario" value="{$usuario->id_usuario}">
                                <button type="submit" id="">Cambiar permiso</button>            
                            </form>
                            {else}
                            <form method="POST" action="editarPermiso/{$usuario->id_usuario}">
                                <input type="text" name="isAdmin"> 
                                <input type="hidden" name="id_usuario" value="{$usuario->id_usuario}">
                                <button type="submit" id="">Cambiar permiso</button>            
                            </form>
                            {/if}
                        </td>
                        <td>
                        <form method="POST" action="borrarUsuario">                            
                            <input type="hidden" name="id_usuario" value="{$usuario->id_usuario}">                               
                            <button type="submit">Borrar Usuario</button>                  
                        </form>
                        </td>                       
                    </tr>   
                {/foreach}
            </tbody>     
    </table>

</div>