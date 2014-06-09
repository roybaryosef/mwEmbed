<?php
	$listeners1 = array(
        'startUp' => array(
            'props' => 'Root of the application',
            'desc' => 'The first command that register the main proxys and main view mediator.'
        ),
        'initiatApp' => array(
            'props' => 'None',
            'desc' => 'Start the init macro commands.'
        ),
        'skinLoaded' => array(
            'props' => 'None',
            'desc' => 'Dispatched when the skin is loaded.'
        ),
        'skinLoadFailed' => array(
            'props' => 'None',
            'desc' => 'Dispatched when skin load failed.'
        ),
        'sourceReady' => array(
            'props' => 'None',
            'desc' => 'When the source is ready we can set the media element to the media player.'
        ),
        'kdpReady' => array(
            'props' => 'None',
            'desc' => 'Notify that the application is ready to be used and events can be listened to and that the loaded entry is ready to be played.'
        ),
        'kdpEmpty' => array(
            'props' => 'None',
            'desc' => 'Notify that the application is ready to be used and events can be listened to but no media was loaded'
        ),
        'layoutReady' => array(
            'props' => 'None',
            'desc' => 'Dispahed when the init macro command is done and the layout is ready'
        ),
        'playerReady' => array(
            'props' => 'None',
            'desc' => 'Dispatches when the player is ready to play the media'
        ),
        'pluginsLoaded' => array(
            'props' => 'Plugins map object. Every key is a plugin ID, value is the status of the plugin (see PluginStatus class)',
            'desc' => 'Notification fired when all plugins finished the loading process.'
        ),
        'singlePluginLoaded' => array(
            'props' => 'The plugin ID',
            'desc' => 'Notification fired when a single plugin is ready'
        ),
        'singlePluginFailedToLoad' => array(
            'props' => 'The plugin ID',
            'desc' => 'Notification fired when a single plugin failed to load'
        ),
        'readyToPlay' => array(
            'props' => 'None',
            'desc' => 'Notification added with version 3.5.0, signifies that an entry / media is ready to be played in the KDP'
        ),
        'readyToLoad' => array(
            'props' => 'None',
            'desc' => 'Dispatched when the skin is loaded.'
        ),
        'entryReady' => array(
            'props' => 'The entry object (KalturaBaseEntry)',
            'desc' => 'The Entry is set'
        ),
        'entryFailed' => array(
            'props' => 'None',
            'desc' => 'Get Entry failed'
        ),
        'entryNotAvailable' => array(
            'props' => 'entryId: The new entry ID',
            'desc' => "Notification fired when the BaseEntry object has been retrieved but KDP can't play the entry. Possible reasons: status not ready / moderation status/ access control"
        ),
        'mediaReady' => array(
            'props' => 'None',
            'desc' => 'The loadable media has completed loading'
        ),
        'mediaError' => array(
            'props' => 'errorEvent: the media error event (MediaErrorEvent)',
            'desc' => 'The player notify on media error'
        ),
        'mediaLoaded' => array(
            'props' => 'None',
            'desc' => 'From version 3.5.0 this notification replaces the MEDIA_READY notification as the catalyst for the MediaReadyCommand. This notification is indicative that the MediaElement constructed under the MediaProxy function prepareMediaElement is loaded into the OSMF MediaPlayer.'
        )
    );

	$listeners2 = array(
        'durationChange' => array(
            'props' => 'ewValue: new duration value',
            'desc' => 'Notify a change in the playing entry duration'
        ),
        'rootResize' => array(
            'props' => 'width: new width, height: new height',
            'desc' => 'The playe parent was resized'
        ),
        'mediaViewableChange' => array(
            'props' => 'None',
            'desc' => 'Used mainlly to know when OSMF Media Playe is viewable'
        ),
        'playerStateChange' => array(
            'props' => 'The new state (MediaPlayerState)',
            'desc' => "ispatched when media player's state has changed (OSMF MediaPlayerState: uninitialized / loading / ready / playing / paused / buffering / playbackError"
        ),
        'playerPaused' => array(
            'props' => 'None',
            'desc' => 'The player is now in pause state'
        ),
        'playerPlayed' => array(
            'props' => 'None',
            'desc' => 'The player is now in play state'
        ),
        'playerSeekStart' => array(
            'props' => 'None',
            'desc' => 'Notify about a seek activity that started'
        ),
        'playerSeekEnd' => array(
            'props' => 'None',
            'desc' => 'Notify that the seek activity has finished'
        ),
        'playerPlayEnd' => array(
            'props' => 'None',
            'desc' => 'The played media has reached the end of playback'
        ),
        'playerUpdatePlayhead' => array(
            'props' => 'Player current time',
            'desc' => 'An update event that notifies about the progress in time when playback is running'
        ),
        'openFullScreen' => array(
            'props' => 'None',
            'desc' => 'Player entered full screen mode'
        ),
        'closeFullScreen' => array(
            'props' => 'None',
            'desc' => 'Player exited from full screen mode'
        ),
        'hasCloseFullScreen' => array(
            'props' => 'None',
            'desc' => 'The fullscreen has just closed'
        ),
        'hasOpenedFullScreen' => array(
            'props' => 'None',
            'desc' => 'The fullscreen was just activated'
        ),
        'volumeChanged' => array(
            'props' => 'newVolume: New volume value',
            'desc' => 'Notification about a change in the player volume'
        ),
        'volumeChangedEnd' => array(
            'props' => 'New volume value',
            'desc' => 'Notification fired when volumeChanged process ended (volume slider thumb release / volume button click). Will save value to cookie if possible'
        ),
        'mute' => array(
            'props' => 'None',
            'desc' => 'Notification fired when the player is muted'
        ),
        'unmute' => array(
            'props' => 'None',
            'desc' => 'Notification fired when the player is unmuted'
        ),
        'bytesDownloadedChange' => array(
            'props' => 'newValue: bytes loaded',
            'desc' => 'Notify the current and the previous value of bytesDownloaded'
        ),
        'bytesTotalChange' => array(
            'props' => 'newValue: total bytes',
            'desc' => "Dispatched by the player when the value of the property 'bytesTotal' has changed"
        ),
        'bufferProgress' => array(
            'props' => 'newTime: new buffer time',
            'desc' => 'The player dispatches this event when the buffer time has changed'
        ),
        'bufferChange' => array(
            'props' => 'true / false',
            'desc' => 'Dispatches when the player start or stop buffering'
        ),
        'scrubberDragStart' => array(
            'props' => 'None',
            'desc' => 'The scrubber had started being dragged'
        ),
        'scrubberDragEnd' => array(
            'props' => 'None',
            'desc' => 'The scrubber had stopped being dragged'
        ),
        'intelliSeek' => array(
            'props' => 'intelliseekTo: new position to seek to',
            'desc' => 'Notification fired when the player has started intelligent seeking'
        ),
        'freePreviewEnd' => array(
            'props' => 'id of the viewed entry',
            'desc' => 'A notification that will be called on the hosting page with content that should be purchased after a short preview'
        ),
        'changeMediaProcessStarted' => array(
            'props' => 'entryId: The new entry ID',
            'desc' => 'Notification fired when the first mini-command of the ChangeMedia macro command has started'
        ),
        'metadataReceived' => array(
            'props' => 'None',
            'desc' => 'Notification fired when entry custom data was received'
        ),
        'cuePointsReceived' => array(
            'props' => 'Cue Points Map. Object mapping between start-times and arrays of the cue points found on that start-time',
            'desc' => "Notification fired when the player has successfully loaded an entry's cue-point configuration"
        ),
        'switchingChangeStarted' => array(
            'props' => 'newIndex: The index of the bitrate the player started switching to. If auto, send -1, newBitrate: The bitrate the player started switching to. If auto, send null',
            'desc' => 'Notification dispatched when the player has started switching to a different dynamic bitrate'
        ),
        'switchingChangeComplete' => array(
            'props' => 'currentIndex: The index of the bitrate that the player finished switching to, currentBitrate: The bitrate the player finished switching to',
            'desc' => 'Notification dispatched when the player has finished switching to a different dynamic bitrate'
        ),
        'playbackComplete' => array(
            'props' => 'None',
            'desc' => 'Signifies the end of a media in the player (can be either ad or content)'
        )
    );

	$listeners3 = array(
        'adOpportunity' => array(
            'props' => 'context: context of the ad opportunity: pre,post, mid, curPoint: the cue point object',
            'desc' => "Notification fired when the player's time progress reaches an ad cue point"
        ),
        'sequenceItemPlayStart' => array(
            'props' => 'sequenceContext: pre / post / mid / main (see SequenceContextType class), currentIndex: index of current item',
            'desc' => 'Signifies the start of an entry that is part of a sequence'
        ),
        'sequenceItemPlayEnd' => array(
            'props' => 'sequenceContext: pre / post / mid / main (see SequenceContextType class), currentIndex: index of current item',
            'desc' => 'Signifies the end of an entry that is part of a sequence as opposed to the end of a regular entry'
        ),
        'preSequenceStart' => array(
            'props' => 'None',
            'desc' => 'Signifies the start of the pre-sequence'
        ),
        'preSequenceComplete' => array(
            'props' => 'None',
            'desc' => 'Signifies the end of the pre-sequence'
        ),
        'postSequenceStart' => array(
            'props' => 'None',
            'desc' => 'Signifies the start of the post-sequence'
        ),
        'postSequenceComplete' => array(
            'props' => 'None',
            'desc' => 'Signifies the end of the post-sequence'
        ),
        'midSequenceStart' => array(
            'props' => 'None',
            'desc' => 'Notification fired when the midroll sequence starts'
        ),
        'midSequenceComplete' => array(
            'props' => 'None',
            'desc' => 'Notification fired when the midroll sequence ends'
        ),
        'bumperStarted' => array(
            'props' => 'timeSlot: preroll / postroll',
            'desc' => 'Defines the value of the type property of a bumper start notification'
        ),
        'bumperClicked' => array(
            'props' => 'None',
            'desc' => 'Defines the value of the type property of a bumper click notification'
        ),
        'adStart' => array(
            'props' => 'timeSlot: pre / post / mid / main (see SequenceContextType class)',
            'desc' => 'Defines the value of the type property of an ad start notification'
        ),
        'adClick' => array(
            'props' => 'timeSlot: pre / post / mid / main (see SequenceContextType class)',
            'desc' => 'Defines the value of the type property of an ad click notification'
        ),
        'adEnd' => array(
            'props' => 'timeSlot: pre / post / mid / main (see SequenceContextType class)',
            'desc' => 'Defines the value of the type property of an ad end notification'
        ),
        'firstQuartileOfAd' => array(
            'props' => 'timeSlot: pre / post / mid / main (see SequenceContextType class)',
            'desc' => 'Defines the value of the type property of 25% of ad notification'
        ),
        'midOfAd' => array(
            'props' => 'timeSlot: pre / post / mid / main (see SequenceContextType class)',
            'desc' => 'Defines the value of the type property of 50% of ad notification'
        ),
        'ThirdQuartileOfAd' => array(
            'props' => 'timeSlot: pre / post / mid / main (see SequenceContextType class)',
            'desc' => 'Defines the value of the type property of 75% of ad notification'
        )
    );
?>