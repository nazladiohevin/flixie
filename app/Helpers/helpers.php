<?php
  function convertSecondsToReadableTime($seconds)
  {
      $hours = floor($seconds / 3600);
      $minutes = floor(($seconds % 3600) / 60);
      $seconds = $seconds % 60;

      $timeString = '';

      if ($hours > 0) {
          $timeString .= $hours . ' Jam ';
      }

      if ($minutes > 0) {
          $timeString .= $minutes . ' Menit ';
      }

      // Tambahkan ini jika ingin menyertakan detik
      // if ($seconds > 0) {
      //     $timeString .= $seconds . ' detik';
      // }

      return trim($timeString);
  }

?>