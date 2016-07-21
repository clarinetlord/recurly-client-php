<?php

class Recurly_ExportFile extends Recurly_Resource
{
  protected function getNodeName() {
    return 'export_file';
  }

  protected function getWriteableAttributes() {
    return array();
  }

  function download($file_pointer) {
    if (empty($this->download_url)) {
      $this->_save(Recurly_Client::GET, $this->getHref());
    }
    $this->_client->getFile($this->download_url, $file_pointer);
  }
}

