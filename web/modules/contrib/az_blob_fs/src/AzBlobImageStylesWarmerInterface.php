<?php

namespace Drupal\az_blob_fs;

use Drupal\file\FileInterface;

/**
 * Provides an interface defining an image styles warmer.
 */
interface AzBlobImageStylesWarmerInterface {

  /**
   * Init warm up with configured image styles for an image file.
   *
   * @param \Drupal\file\FileInterface $file
   *   The file for which image styles should be created.
   */
  public function warmUp(FileInterface $file);

  /**
   * Do warm up of image styles for an image file.
   *
   * @param \Drupal\file\FileInterface $file
   *   The file for which image styles should be created.
   * @param array $image_styles
   *   List of image styles machine names.
   */
  public function doWarmUp(FileInterface $file, array $image_styles);

  /**
   * Add file and image styles to ImageStylesPregenerator queue.
   *
   * @param \Drupal\file\FileInterface $file
   *   The file for which image styles should be created.
   * @param array $image_styles
   *   List of image styles machine names.
   */
  public function addQueue(FileInterface $file, array $image_styles);

  /**
   * Validate file as an image file.
   *
   * @param \Drupal\file\FileInterface $file
   *   The file for which image styles should be created.
   */
  public function validateImage(FileInterface $file);

}
