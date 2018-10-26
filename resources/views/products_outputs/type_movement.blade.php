@if($p->type_movement == 1)
<td>Venda</td>
@elseif($p->type_movement == 2)
<td>Consumo Interno</td>
@elseif($p->type_movement == 3)
<td>Devolução</td>
@elseif($p->type_movement == 4)
<td>Ordem de Serviço</td>
@elseif($p->type_movement == 5)
<td>Troca</td>
@elseif($p->type_movement == 6)
<td>Nota Fiscal</td>
@endif