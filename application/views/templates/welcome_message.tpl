<p>Name:  {$name} </p>
<p>Years old: {$years_old}</p>
<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <td>Phone</td>
        <td>Fax</td>
        <td>Cell</td>
    </tr>
    {section name=contact loop=$contacts}
        <tr>
            <td>{$contacts[contact].phone}</td>
            <td>{$contacts[contact].fax}</td>
            <td>{$contacts[contact].cell}</td>
        </tr>
    {/section}
</table>
