<?php
header('Content-Type: application/force-download');
header('Content-Disposition: attachment; filename=租赁成交记录导出-'.date('y-m-d').'.xls');
echo '<table>
  <tr>
    <td>asd</td>
    <td>123</td>
  </tr>
  <tr>
    <td>qwe</td>
    <td>456</td>
  </tr>
</table>
';
