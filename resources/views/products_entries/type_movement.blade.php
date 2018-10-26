@if($p->type_movement == 1)
<td>Compra</td>
@elseif($p->type_movement == 2)
<td>Acerto</td>
@elseif($p->type_movement == 3)
<td>Transferência</td>
@elseif($p->type_movement == 4)
<td>Devolução</td>
@elseif($p->type_movement == 5)
<td>Troca</td>
@elseif($p->type_movement == 6)
<td>Nota Fiscal</td>
@endif