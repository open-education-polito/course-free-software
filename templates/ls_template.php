<?php

/**
 * Base php file to be included in all the categories files.
 *
 * @file Base.php file.
 * @author libremente
 */

$directorySeparator = "/";
$pdf_ext = ".pdf";
$src_ext = ".odt";
$filesDirectory = "repo/CATEGORIES";

// Fallback on software if failure happens.
if (!$category) {
  $category = "SOFTWARE";
}
$dir = $filesDirectory . $directorySeparator . $category;

$src = $dir . $directorySeparator . "SRC";
$pdf = $dir . $directorySeparator . "PDF";

// Scandir di SOURCE e PDF.
if (file_exists($src)) {
  $files_src = scandir($src);
  $files_pdf = scandir($pdf);

  // Remove unused folders.
  $folders = array('..', '.', 'folder');

  // Check the number of files (pdf files).
  $count_pdf_files = count($files_pdf);
  $count_src_files = count($files_src);

  // Removing now.
  $files_src = array_diff($files_src, $folders);
  $files_pdf = array_diff($files_pdf, $folders);

  echo '<table class="table table-bordered" style="background-color:white">';
  echo '<th class="info"><h3>Name</h3></th>';
  echo '<th class="info"><h3>Download</h3></th>';

  if ($count_pdf_files != 0) {
    for ($i = 0; $i < $count_pdf_files; $i++) {
      if (isset($files_pdf[$i])) {

        // Remove the extension to check.
        $fname = preg_replace('/\\.[^.\\s]{3,4}$/', '', $files_pdf[$i]);
        echo '<tr>';
        if (strpos($fname, "ITALIAN")) {
          $name = str_replace("_", " ", $fname);
          echo '<td><h3>' . str_replace("ITALIAN", " ", $name) . '<i>in Italian Language  </i><img src="img/flags/it.png"></h3></td>';
        }
        else {
          echo '<td><h3>' . str_replace("_", " ", $fname) . '</h3></td>';
        }
        // Print the file from the "pdf" dir.
        echo '<td><a href="' . $pdf . $directorySeparator . $files_pdf[$i] . '" class="btn btn-orange" style="margin-right:5%;">PDF</a>';

        // Check if file in the PDF version -> check inside the PDF folder.
        for ($j = 0; $j < $count_src_files; $j++) {
          $sname = preg_replace('/\\.[^.\\s]{3,4}$/', '', $files_src[$j]);
          if ($sname == $fname) {
            // Found correspondence.
            $src_file = $src . $directorySeparator . $files_src[$j];
            echo '<a href="' . $src_file . '" class="btn btn-green">Source</a>';
          }
        }
        echo '</td></tr>';
      }
    }
    echo '<tr class="success"><td><h3><i>Global ZIP file</i></h3></td><td><center><a href="' . $dir . $directorySeparator . $category . '.zip" class="btn btn-red">ZIP</a></center>';
  }
  else {
    echo '<tr><td colspan="3"><h3>No files available.</h3></td></tr>';
    echo '<tr><td colspan="3"><h3></h3></td></tr>';
  }

  // Global download.
  echo '</table>';
}
else {
  echo "Non ci sono file in questa categoria.";
}
