<?php

class Recurly_ExportFileList extends Recurly_Pager
{
  /**
   * Look for export files on a given date.
   *
   * @param string Date in YYYY-MM-DD format
   * @return Recurly\Client\ExportDate invoice
   */
  public static function get($date, $params = null, $client = null) {
    return new self(self::_uriWithParams('/export_dates/' . rawurlencode($date) . '/export_files', $params), $client);
  }

  protected function getNodeName() {
    return 'export_files';
  }
}
