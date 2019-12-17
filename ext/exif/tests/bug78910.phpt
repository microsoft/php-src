--TEST--
Bug #78910: Heap-buffer-overflow READ in exif (OSS-Fuzz #19044)
--FILE--
<?php

var_dump(exif_read_data('data:image/jpg;base64,TU0AKgAAAAwgICAgAAIBDwAEAAAAAgAAACKSfCAgAAAAAEZVSklGSUxN'));

?>
--EXPECTF--
Notice: exif_read_data(%s): Read from TIFF: tag(0x927C, MakerNote  ): Illegal format code 0x2020, switching to BYTE in %s on line %d

Warning: exif_read_data(%s): Process tag(x927C=MakerNote  ): Illegal format code 0x2020, suppose BYTE in %s on line %d

Warning: exif_read_data(%s): IFD data too short: 0x0000 offset 0x000C in %s on line %d

Warning: exif_read_data(%s): Invalid TIFF file in %s on line %d
bool(false)
