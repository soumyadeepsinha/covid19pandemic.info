  <?php
  $url = "https://www.mohfw.gov.in/";
  $html = file_get_contents($url);
  $dom = new domDocument;
  @$dom->loadHTML($html);
  $tables = $dom->getElementsByTagName('table');
  $rows = $tables->item(0)->getElementsByTagName('tr');
  $total = '';
  $discharged = '';
  $death = '';
  foreach ($rows as $row) {
    $cols = $row->getElementsByTagName('td');
    if (isset($cols->item(0)->nodeValue) && isset($cols->item(1)->nodeValue) && isset($cols->item(2)->nodeValue) && isset($cols->item(3)->nodeValue) && isset($cols->item(4)->nodeValue)) {
      $total = $total + $cols->item(2)->nodeValue;
      $discharged = $discharged + $cols->item(3)->nodeValue;
      $death = $death + $cols->item(4)->nodeValue;
    }
  }
  ?>
  </body>

  </html>