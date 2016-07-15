<?php

class Recurly_ExportFile extends Recurly_Resource
{
  protected function getNodeName() {
    return 'export_file';
  }

  protected function getWriteableAttributes() {
    return array();
  }
}

