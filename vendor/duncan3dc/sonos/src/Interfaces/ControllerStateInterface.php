<?php

namespace duncan3dc\Sonos\Interfaces;

use duncan3dc\Sonos\Interfaces\Utils\TimeInterface;
use duncan3dc\Sonos\Tracks\Stream;

/**
 * Representation of the current state of a controller.
 */
interface ControllerStateInterface {
	/**
	 * Get the playing mode of the controller.
	 *
	 * @return int One of the ControllerInterface::STATE_ constants
	 */
	public function getState();

	/**
	 * Get the number of the active track in the queue
	 *
	 * @return int The zero-based number of the track in the queue
	 */
	public function getTrack();

	/**
	 * Get the position of the currently active track.
	 *
	 * @return TimeInterface
	 */
	public function getPosition();

	/**
	 * Check if repeat is currently active.
	 *
	 * @return bool
	 */
	public function getRepeat();

	/**
	 * Check if shuffle is currently active.
	 *
	 * @return bool
	 */
	public function getShuffle();

	/**
	 * Check if crossfade is currently active.
	 *
	 * @return bool
	 */
	public function getCrossfade();

	/**
	 * Each speaker's UUID and its volume.
	 *
	 * @return array<string,int>
	 */
	public function getSpeakers();

	/**
	 * Get the tracks that are in the queue.
	 *
	 * @return TrackInterface[]
	 */
	public function getTracks();

	/**
	 * Get the stream this controller is using.
	 *
	 * @var Stream|null
	 */
	public function getStream();
}
