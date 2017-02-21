<?php
//////////////////////////////////////////////////////////////////////////////////////////////////
//                            Telegram Theme based on                                       //
//                          SolidDark theme v1.1 for Telegram Desktop.                          //
//                                                                                              //
//                                                                                              //
//        Source code: https://github.com/MasterGroosha/telegram-soliddark-theme                //
//                                                                                              //
//        Published under MIT Licence. Feel free to modify this file whatever you want.         //
//        Mentioning the original repo (see above) isn't mandatory, but highly appreciated!     //
//                                                                                              //
//                                                                                              //
//////////////////////////////////////////////////////////////////////////////////////////////////

$model_theme="COLOR_GRAY: $color_gray;\r\n
COLOR_DARK: $color_dark;\r\n "./*Main color (dark one)*/"
COLOR_GREEN_DARK: $color_green_dark;\r\n                      "./* Accent color*/"

COLOR_GREEN_LIGHT: $color_green_light; \r\n                    "./* Accent color #2 (just like first one with slight changes)*/"

COLOR_GREEN_RIPPLE_ACTIVE: $color_green_ripple_active;\r\n
\r\n
COLOR_WHITE: $textcolor;\r\n
COLOR_BLACK: #000000;\r\n
COLOR_PINK: #e016a0;\r\n                            "./* Just for testing purposes :)*/"

\r\n". /* basic */"

windowBg: COLOR_DARK;\r\n                           "./* Window backgrounds*/"

windowFg: COLOR_WHITE; \r\n                         "./* Main text / chat text*/"

windowBgOver: #363838; \r\n                         "./* Search field background + buttons color in context menu*/"

windowBgRipple: #272828; \r\n                       "./* Inactive chat in chats list (press & hold)*/"

windowFgOver: windowFg;  \r\n                       "./* black: fallback for over text color*/"

windowSubTextFg: COLOR_GRAY;\r\n                    "./* Chats list message preview text*/"

windowSubTextFgOver: #919191;\r\n                   "./* Mouse over chats list message preview text*/"

windowBoldFg: COLOR_WHITE;   \r\n                   "./* Bold font (titles in Settings, Left menu options)*/"

windowBoldFgOver: COLOR_GREEN_LIGHT;\r\n            "./* Mouse over chats list chat name text (+ Left menu options on hover)*/"

windowBgActive: COLOR_GREEN_DARK;\r\n               "./* Active button background (+ checkboxes background)*/"

windowFgActive: COLOR_WHITE; \r\n                   "./* Active selected chats list text / button text + checkboxes' "ticks" color*/"

windowActiveTextFg: COLOR_GREEN_LIGHT; \r\n         "./* Online status, links, recording cancel, etc*/"

windowShadowFg: COLOR_BLACK;      \r\n              "./* Window border shadows*/"

windowShadowFgFallback: COLOR_DARK; \r\n            "./* Notification border*/"

\r\n
shadowFg: #00000018;\r\n                            "./* Internal border shadows*/"

slideFadeOutBg: #0000003c;\r\n
slideFadeOutShadowFg: windowShadowFg; \r\n          "./* Window slide animation shadow*/"

\r\n
imageBg: COLOR_BLACK;\r\n
imageBgTransparent: COLOR_WHITE;\r\n
\r\n"./*widgets */"

activeButtonBg: COLOR_GREEN_DARK;               "./* Currently selected button background*/"

activeButtonBgOver: #00a32b; \r\n                   "./* Mouse over currently selected button background*/"

activeButtonBgRipple: COLOR_GREEN_RIPPLE_ACTIVE;\r\n"./* Primary button background color (and active chat) - Press & hold */"

activeButtonFg: COLOR_WHITE;\r\n                    "./* Currently selected button text*/"

activeButtonFgOver: activeButtonFg; \r\n            "./* Mouse over currently selected button text*/"

activeButtonSecondaryFg: COLOR_WHITE;\r\n           "./* Counter color on primary button*/"

activeButtonSecondaryFgOver: COLOR_WHITE;\r\n       "./* Counter color on primary button (hover)*/"

activeLineFg: COLOR_GREEN_DARK; \r\n                "./* Active input field line color (normal)*/"

activeLineFgError: #e48383;     \r\n                "./* Active input field line color (error)*/"

\r\n
lightButtonBg: COLOR_DARK; \r\n                     "./* Secondary button background color (default)*/"

lightButtonBgOver: #424444; \r\n                    "./* Secondary button background color (hover)*/"

lightButtonBgRipple: #363838;\r\n                   "./* Secondary button background color (press & hold)*/"

lightButtonFg: COLOR_WHITE;    \r\n                 "./* Secondary button text color*/"

lightButtonFgOver: lightButtonFg;\r\n
\r\n
attentionButtonFg: #d84343;\r\n
attentionButtonFgOver: #d84343;\r\n
attentionButtonBgOver: #ef9592;\r\n
attentionButtonBgRipple: #d87c79;\r\n
\r\n
outlineButtonBg: COLOR_DARK; \r\n                   "./* Buttons background in profiles (shared media)*/"

outlineButtonBgOver: lightButtonBgOver;\r\n
outlineButtonOutlineFg: windowBgActive;\r\n
outlineButtonBgRipple: lightButtonBgRipple;\r\n
\r\n
menuBg: COLOR_DARK;\r\n
menuBgOver: windowBgOver;\r\n
menuBgRipple: windowBgRipple;\r\n
menuIconFg: COLOR_GRAY;      \r\n                   "./* Icons color (left menu button, scroll down, paperclip..)*/"

menuIconFgOver: COLOR_GREEN_LIGHT;   \r\n           "./* Icons color on hover (left menu button, scroll down, paperclip..)*/"

menuSubmenuArrowFg: #373737; \r\n                   "./* (unknown)*/"

menuFgDisabled: #cccccc;\r\n
menuSeparatorFg: COLOR_DARK;  \r\n                  "./* (unknown)*/"

\r\n
scrollBarBg: #15cd7d53;   \r\n                      "./* Scrollbar (chats list) current position*/"

scrollBarBgOver: #15cd7d7a; \r\n                    "./* Mouse over scrollbar (chats list) current position*/"

scrollBg: #0000001a;       \r\n                     "./* Scrollbar (chats list) background*/"

scrollBgOver: #0000002c;   \r\n                     "./* Mouse over scrollbar (chats list) background*/"

\r\n
smallCloseIconFg: #c7c7c7;\r\n
smallCloseIconFgOver: #a3a3a3;\r\n
\r\n
radialFg: COLOR_WHITE;\r\n
radialBg: #00000056;\r\n
\r\n
placeholderFg: COLOR_GRAY;  \r\n                    "./* Inactive input box placeholder text*/"

placeholderFgActive: #aaaaaa;\r\n                   "./* Active input box placeholder text*/"

inputBorderFg: #e0e0e0;\r\n
filterInputBorderFg: COLOR_GREEN_DARK;\r\n          "./* Search field border*/"

filterInputInactiveBg: windowBgOver;\r\n
checkboxFg: #b3b3b3;\r\n
\r\n
sliderBgInactive: #e1eaef;           \r\n           "./* Inactive media player button (prev/next song)*/"

sliderBgActive: windowBgActive;        \r\n         "./* Active media player button (prev/next song)*/"

\r\n
tooltipBg: #eef2f5;\r\n
tooltipFg: #5d6c80;\r\n
tooltipBorderFg: #c9d1db;\r\n
\r\n"./* custom title bar for Windows and macOS */"

titleBg: COLOR_DARK;     \r\n                       "./* Title bar */"

titleShadow: #00000003; \r\n
titleButtonFg: #ababab;     \r\n                     "./* Title bar buttons(min/max/close)*/"

titleButtonBgOver: #dbdbdb; \r\n                     "./* Title bar min/max background (hover)*/"

titleButtonFgOver: #9a9a9a; \r\n                     "./* Title bar min/max icons */"

titleButtonCloseBgOver: #e81123;\r\n
titleButtonCloseFgOver: COLOR_WHITE;\r\n
titleFgActive: #3e3c3e;             \r\n             "./* Active title bar text (Mac)*/"

titleFg: #acacac;                   \r\n             "./* Inactive title bar text (Mac)*/"

\r\n"./* tray icon */"

trayCounterBg: #f23c34;\r\n
trayCounterBgMute: #888888;\r\n
trayCounterFg: COLOR_WHITE;\r\n
trayCounterBgMacInvert: COLOR_WHITE;\r\n
trayCounterFgMacInvert: COLOR_WHITE;\r\n
\r\n"./* layers */"

layerBg: #0000007f;\r\n
\r\n
cancelIconFg: menuIconFg;\r\n
cancelIconFgOver: menuIconFgOver;\r\n
\r\n"./* boxes */"

boxBg: COLOR_DARK; \r\n                             "./* Popup windows background color*/"

boxTextFg: COLOR_GRAY;\r\n
boxTextFgGood: #4ab44a;\r\n
boxTextFgError: #d84d4d;\r\n
boxTitleFg: COLOR_WHITE;  \r\n                      "./* Popup windows titles color (sessions, contacts...)*/"

boxSearchBg: boxBg;\r\n
boxSearchCancelIconFg: cancelIconFg;\r\n
boxSearchCancelIconFgOver: cancelIconFgOver;\r\n
\r\n
boxTitleAdditionalFg: #808080;\r\n
boxTitleCloseFg: cancelIconFg;\r\n
boxTitleCloseFgOver: cancelIconFgOver;\r\n
\r\n
membersAboutLimitFg: windowSubTextFgOver;\r\n
\r\n
contactsBg: COLOR_DARK;\r\n                         "./* Contacts list background color*/"

contactsBgOver: windowBgOver;     \r\n              "./* Contacts list mouse over background*/"

contactsNameFg: COLOR_WHITE;\r\n
contactsStatusFg: COLOR_GRAY;   \r\n                "./* Contacts list last seen*/"

contactsStatusFgOver: windowSubTextFgOver;\r\n
contactsStatusFgOnline: windowActiveTextFg;\r\n
\r\n
photoCropFadeBg: layerBg;\r\n
photoCropPointFg: COLOR_WHITE;\r\n
\r\n"./* intro */"

introBg: COLOR_DARK;\r\n
introTitleFg: windowBoldFg;\r\n
introDescriptionFg: COLOR_GRAY;\r\n
introErrorFg: COLOR_GRAY;\r\n
\r\n
introCoverTopBg: #0f89d0;\r\n
introCoverBottomBg: #39b0f0;\r\n
introCoverIconsFg: #5ec6ff;\r\n
introCoverPlaneTrace: #5ec6ff69;\r\n
introCoverPlaneInner: #c6d8e8;\r\n
introCoverPlaneOuter: #a1bed4;\r\n
introCoverPlaneTop: COLOR_WHITE;\r\n
\r\n
dialogsMenuIconFg: menuIconFg;\r\n
dialogsMenuIconFgOver: menuIconFgOver;\r\n
\r\n
dialogsBg: COLOR_DARK;           \r\n               "./* Chats list background color*/"

dialogsNameFg: COLOR_WHITE;\r\n
dialogsChatIconFg: dialogsNameFg;\r\n
dialogsDateFg: COLOR_GRAY;         \r\n             "./* Chats list date text*/"

dialogsTextFg: COLOR_GRAY;          \r\n            "./* Chats list message preview text*/"

dialogsTextFgService: windowActiveTextFg; \r\n      "./* Chats list message preview sender name*/"

dialogsDraftFg: #dd4b39;                   \r\n     "./* "Draft" word*/"

dialogsVerifiedIconBg: windowBgActive;\r\n
dialogsVerifiedIconFg: COLOR_WHITE;\r\n
dialogsSendingIconFg: #c1c1c1;\r\n
dialogsSentIconFg: #5dc452;\r\n
dialogsUnreadBg: #008000;               \r\n        "./* Chats list unread counter background*/"

dialogsUnreadBgMuted: #999999;          \r\n        "./* Unread counter (for muted chats) + pins color(?)*/"

dialogsUnreadFg: COLOR_WHITE;           \r\n        "./* Unread counter text color*/"

\r\n
dialogsBgOver: #363838;                \r\n         "./* Inactive chat color on hover*/"

dialogsNameFgOver: #ededed;\r\n
dialogsChatIconFgOver: dialogsNameFgOver;\r\n
dialogsDateFgOver: windowSubTextFgOver;\r\n
dialogsTextFgOver: windowSubTextFgOver;\r\n
dialogsTextFgServiceOver: dialogsTextFgService;\r\n "./* Mouse over chats list message preview sender name*/"

dialogsDraftFgOver: dialogsDraftFg;\r\n
dialogsVerifiedIconBgOver: dialogsVerifiedIconBg;\r\n
dialogsVerifiedIconFgOver: dialogsVerifiedIconFg;\r\n
dialogsSendingIconFgOver: dialogsSendingIconFg;\r\n
dialogsSentIconFgOver: dialogsSentIconFg;\r\n
dialogsUnreadBgOver: dialogsUnreadBg;\r\n
dialogsUnreadBgMutedOver: dialogsUnreadBgMuted;\r\n
dialogsUnreadFgOver: dialogsUnreadFg;\r\n
\r\n
dialogsBgActive: $dialogsBgActive;    \r\n                   "./* Active chat color (in chats list)*/"

dialogsNameFgActive: COLOR_WHITE;\r\n
dialogsChatIconFgActive: dialogsNameFgActive;\r\n
dialogsDateFgActive: COLOR_WHITE;\r\n
dialogsTextFgActive: COLOR_WHITE;\r\n
dialogsTextFgServiceActive: dialogsTextFgActive;\r\n
dialogsDraftFgActive: #c6e1f7;\r\n
dialogsVerifiedIconBgActive: dialogsTextFgActive;\r\n
dialogsVerifiedIconFgActive: dialogsBgActive;\r\n
dialogsSendingIconFgActive: COLOR_WHITE;\r\n
dialogsSentIconFgActive: dialogsTextFgActive;\r\n
dialogsUnreadBgActive: dialogsTextFgActive;\r\n
dialogsUnreadBgMutedActive: dialogsDraftFgActive;\r\n
dialogsUnreadFgActive: dialogsBgActive;\r\n
\r\n
dialogsForwardBg: dialogsBgActive;\r\n
dialogsForwardFg: dialogsNameFgActive;\r\n
\r\n
searchedBarBg: COLOR_DARK;           \r\n           "./* Search results window background color*/"

searchedBarBorder: COLOR_GREEN_DARK;\r\n
searchedBarFg: COLOR_GREEN_LIGHT;     \r\n          "./* Search results text color*/"

\r\n"./* history */"

topBarBg: COLOR_DARK;  \r\n                         "./* Chat header background*/"

emojiPanBg: COLOR_DARK;     \r\n                    "./* Sticker panel background*/"

emojiPanCategories: COLOR_DARK;\r\n                 "./* Sticker panel bottom bar background*/"

emojiPanHeaderFg: COLOR_GREEN_LIGHT;     \r\n       "./* Sticker panel title text*/"

emojiPanHeaderBg: COLOR_DARK;             \r\n      "./* Sticker panel top bar background*/"

stickerPanDeleteBg: #000000cc;\r\n
stickerPanDeleteFg: COLOR_WHITE;\r\n
stickerPreviewBg: #2f2f2fCC;            \r\n        "./* Sticker preview background*/"

\r\n
historyTextInFg: #adadad;  \r\n                     "./* Incoming messages TEXT color*/"

historyTextOutFg: #efefef;   \r\n                   "./* Outgoing messages TEXT color*/"

historyCaptionInFg: historyTextInFg;\r\n
historyCaptionOutFg: historyTextOutFg;\r\n
historyFileNameInFg: historyTextInFg;\r\n
historyFileNameOutFg: historyTextOutFg;\r\n
historyOutIconFg: dialogsSentIconFg;   \r\n         "./* "Eye" and "Ticks" color for outgoing messages (selected)*/"

historyOutIconFgSelected: COLOR_GREEN_LIGHT; \r\n   "./* "Eye" and "Ticks" color for outgoing messages (selected)*/"

historyIconFgInverted: COLOR_WHITE;\r\n
historySendingOutIconFg: #98d292;     \r\n          "./* "Clock" icon while sending file (outgoing)*/"

historySendingInIconFg: #a0adb5;      \r\n          "./* "Clock" icon while sending file (incoming)*/"

historySendingInvertedIconFg: COLOR_WHITE;\r\n
\r\n
historySystemBg: #89a0b47f;\r\n
historySystemBgSelected: #bbc8d4a2;\r\n
historySystemFg: COLOR_WHITE;\r\n
\r\n
historyUnreadBarBg: #424444;        \r\n            "./* Unread messages bar color*/"

historyUnreadBarBorder: COLOR_DARK;\r\n
historyUnreadBarFg: #ededed;\r\n
\r\n
historyForwardChooseBg: #0000004c;    \r\n          "./* "Choose recipient" BACKGROUND color (forwarding)*/"

historyForwardChooseFg: COLOR_WHITE; \r\n           "./* "Choose recipient" TEXT color (forwarding)*/"

\r\n
historyPeer1NameFg: #ff9100;      \r\n              "./* Group chat sender name - Orange*/"

historyPeer1UserpicBg: #e17076;\r\n
historyPeer2NameFg: #4fad2d;     \r\n               "./* Green*/"

historyPeer2UserpicBg: #7bc862;\r\n
historyPeer3NameFg: #d09306;    \r\n                "./* Gold*/"

historyPeer3UserpicBg: #e5ca77;\r\n
historyPeer4NameFg: #15cd7d;     \r\n               "./* Light green*/"

historyPeer4UserpicBg: #65aadd;\r\n
historyPeer5NameFg: #9a4ff7;    \r\n                "./* Violet*/"

historyPeer5UserpicBg: #a695e7;\r\n
historyPeer6NameFg: #cd4073;      \r\n              "./* "Raspberry"*/"

historyPeer6UserpicBg: #ee7aae;\r\n
historyPeer7NameFg: #2996ad;      \r\n              "./* Cyan*/"

historyPeer7UserpicBg: #6ec9cb;\r\n
historyPeer8NameFg: #ce671b;       \r\n             "./* One more orange?!*/"

historyPeer8UserpicBg: #faa774;\r\n
historyPeerUserpicFg: COLOR_WHITE;\r\n
\r\n
historyScrollBarBg: #15cd7d7a;       \r\n           "./* Scrollbar (history view) background*/"

historyScrollBarBgOver: #15cd7dbc;  \r\n            "./* Scrollbar (history view) background (hover)*/"

historyScrollBg: #6f72724d;       \r\n              "./* Scrollbar (history view) current position background*/"

historyScrollBgOver: #6f727280; \r\n                "./* Scrollbar (history view) current position background (hover)*/"

\r\n
msgInBg: $msgInBg;             \r\n                  "./* Incoming message background*/"

msgInBgSelected: #222323;      \r\n                 "./* Selected incoming message background*/"

msgOutBg: $msgOutBg;             \r\n                 "./* Outgoing message background*/"

msgOutBgSelected: #222323;      \r\n                "./* Selected outgoing message background*/"

msgSelectOverlay: #2223239b;    \r\n                "./* Selected media (images...) overlay*/"

msgStickerOverlay: #2223237f;      \r\n             "./* Selected sticker overlay*/"

msgInServiceFg: windowActiveTextFg;   \r\n          "./* Incoming reply quoted name*/"

msgInServiceFgSelected: windowActiveTextFg; \r\n    "./* Selected incoming reply quoted name*/"

msgOutServiceFg: COLOR_GREEN_LIGHT;   \r\n          "./* Outgoing reply quoted name*/"

msgOutServiceFgSelected: #367570;  \r\n             "./* Selected outgoing reply quoted name*/"

msgInShadow: #3d3c3c29;            \r\n             "./* Incoming message box shadow*/"

msgInShadowSelected: #2f303029;  \r\n               "./* Selected incoming message box shadow*/"

msgOutShadow: #4e4f4e40;          \r\n              "./* Outgoing message box shadow*/"

msgOutShadowSelected: #2f303040;   \r\n             "./* Selected outgoing message box shadow*/"

msgInDateFg: #a0acb6;  \r\n                         "./* Incoming message date text*/"

msgInDateFgSelected: COLOR_GREEN_LIGHT;\r\n
msgOutDateFg: COLOR_GRAY;              \r\n         "./* Outgoing message date text*/"

msgOutDateFgSelected: COLOR_GREEN_LIGHT;\r\n
msgServiceFg: COLOR_WHITE;         \r\n             "./* Service messages TEXT color (join, left etc)*/"

msgServiceBg: #363838;            \r\n              "./* Service messages BACKGROUND color (join, left etc)*/"

msgServiceBgSelected: #8ca0b3a2;\r\n
msgInReplyBarColor: COLOR_GREEN_DARK;   \r\n        "./* Incoming msg: vertical bar next to reply*/"

msgInReplyBarSelColor: COLOR_GREEN_DARK; \r\n       "./* Incoming msg: vertical bar next to reply (selected)*/"

msgOutReplyBarColor: COLOR_GREEN_DARK;  \r\n        "./* Outgoing msg: vertical bar next to reply*/"

msgOutReplyBarSelColor: COLOR_GREEN_DARK;\r\n       "./* Outgoing msg: vertical bar next to reply (selected)*/"

msgInMonoFg: COLOR_GREEN_LIGHT;  \r\n               "./* Monowidth font / incoming msg*/"

msgOutMonoFg: COLOR_GREEN_LIGHT;  \r\n              "./* Monowidth font / outgoing msg*/"

msgDateImgFg: msgServiceFg;			\r\n
msgDateImgBg: #00000054;       \r\n                 "./* Download / play / etc overlay backgrounds*/"

msgDateImgBgOver: #00000074;       \r\n             "./* Mouse over download / play / etc overlay backgrounds*/"

msgDateImgBgSelected: #1c4a7187;\r\n
\r\n
msgFileThumbLinkInFg: lightButtonFg;\r\n
msgFileThumbLinkInFgSelected: lightButtonFgOver;\r\n
msgFileThumbLinkOutFg: #5eba5b;\r\n
msgFileThumbLinkOutFgSelected: #31a298;\r\n
msgFileInBg: windowBgActive;\r\n
msgFileInBgOver: #63b56a;\r\n
msgFileInBgSelected: #63b56a;\r\n
msgFileOutBg: COLOR_GREEN_DARK;\r\n
msgFileOutBgOver: #6bc272;\r\n
msgFileOutBgSelected: #5fb389;\r\n
\r\n
msgFile1Bg: $msgFile1Bg;\r\n
msgFile1BgDark: #5c9ece;\r\n
msgFile1BgOver: #5294c4;\r\n
msgFile1BgSelected: #5099d0;\r\n
msgFile2Bg: #61b96e;\r\n
msgFile2BgDark: #4da859;\r\n
msgFile2BgOver: #44a050;\r\n
msgFile2BgSelected: #46a07e;\r\n
msgFile3Bg: #e47272;\r\n
msgFile3BgDark: #cd5b5e;\r\n
msgFile3BgOver: #c35154;\r\n
msgFile3BgSelected: #9f6a82;\r\n
msgFile4Bg: #efc274;\r\n
msgFile4BgDark: #e6a561;\r\n
msgFile4BgOver: #dc9c5a;\r\n
msgFile4BgSelected: #b19d84;\r\n
\r\n
historyFileInIconFg: COLOR_WHITE;          \r\n       "./* Uploading/downloading icons?*/"

historyFileInIconFgSelected: COLOR_WHITE;\r\n
historyFileInRadialFg: COLOR_WHITE;\r\n
historyFileInRadialFgSelected: COLOR_WHITE;\r\n
historyFileOutIconFg: COLOR_WHITE;\r\n
historyFileOutIconFgSelected: COLOR_WHITE;\r\n
historyFileOutRadialFg: COLOR_WHITE;\r\n
historyFileOutRadialFgSelected: COLOR_WHITE;\r\n
historyFileThumbIconFg: COLOR_WHITE;\r\n
historyFileThumbIconFgSelected: COLOR_WHITE;\r\n
historyFileThumbRadialFg: COLOR_WHITE;\r\n
historyFileThumbRadialFgSelected: COLOR_WHITE;\r\n
\r\n
msgWaveformInActive: windowBgActive;\r\n
msgWaveformInActiveSelected: #51a3d3;\r\n
msgWaveformInInactive: #d4dee6;\r\n
msgWaveformInInactiveSelected: #9cc1e1;\r\n
msgWaveformOutActive: #78c67f;\r\n
msgWaveformOutActiveSelected: #6badad;\r\n
msgWaveformOutInactive: #b3e2b4;\r\n
msgWaveformOutInactiveSelected: #91c3c3;\r\n
\r\n
msgBotKbOverBgAdd: COLOR_DARK;          \r\n         "./* Inline button (hover)*/"

msgBotKbIconFg: COLOR_WHITE;            \r\n         "./* Inline button icon color (URL Buttons, for example)*/"

msgBotKbRippleBg: #00000020;            \r\n         "./* Inline button (press & hold)*/"

\r\n
mediaInFg: msgInDateFg;\r\n
mediaInFgSelected: msgInDateFgSelected;\r\n
mediaOutFg: msgOutDateFg;\r\n
mediaOutFgSelected: msgOutDateFgSelected;\r\n
\r\n
youtubePlayIconBg: #e83131c8;\r\n
youtubePlayIconFg: COLOR_WHITE;\r\n
videoPlayIconBg: #0000007f;\r\n
videoPlayIconFg: COLOR_WHITE;\r\n
toastBg: #000000b2;\r\n
toastFg: COLOR_WHITE;\r\n
\r\n
reportSpamBg: emojiPanHeaderBg;\r\n
reportSpamFg: COLOR_GRAY;\r\n
\r\n
historyToDownShadow: #00000040;\r\n
historyComposeAreaBg: msgInBg;\r\n
historyComposeAreaFg: COLOR_WHITE;          \r\n     "./* Text color in "Type your message" field*/"

historyComposeAreaFgService: msgInDateFg;\r\n
historyComposeIconFg: menuIconFg;\r\n
historyComposeIconFgOver: menuIconFgOver;\r\n
historySendIconFg: windowBgActive;\r\n
historySendIconFgOver: windowBgActive;\r\n
historyPinnedBg: historyComposeAreaBg;\r\n
historyReplyBg: historyComposeAreaBg;\r\n
historyReplyCancelFg: cancelIconFg;\r\n
historyReplyCancelFgOver: cancelIconFgOver;\r\n
\r\n
historyComposeButtonBg: historyComposeAreaBg;\r\n
historyComposeButtonBgOver: windowBgOver;\r\n
historyComposeButtonBgRipple: windowBgRipple;\r\n
\r\n
"./* overview */"
\r\n
overviewCheckBg: #00000040;\r\n
overviewCheckFg: COLOR_DARK;\r\n
overviewCheckFgActive: COLOR_DARK;\r\n
overviewPhotoSelectOverlay: #40ace333;\r\n
profileStatusFgOver: #7c99b2;
notificationsBoxMonitorFg: COLOR_GRAY;\r\n
notificationsBoxScreenBg: dialogsBgActive;\r\n
notificationSampleUserpicFg: windowBgActive;\r\n
notificationSampleCloseFg: #d7d7d7;\r\n
notificationSampleTextFg: #d7d7d7;\r\n
notificationSampleNameFg: #939393;\r\n
\r\n
mainMenuBg: COLOR_DARK;            \r\n             "./* Left menu background (lower part, not buttons)*/"

mainMenuCoverBg: dialogsBgActive; \r\n              "./* Left menu background (upper part)*/"

mainMenuCoverFg: COLOR_WHITE;\r\n
mediaPlayerBg: COLOR_DARK;      \r\n                "./* Music player background*/"

mediaPlayerActiveFg: COLOR_GREEN_DARK; \r\n         "./* Clickable Next song/Prev song button in music player*/"

mediaPlayerInactiveFg: #4f5151;  \r\n               "./* "Disabled" Next song/Prev song button in music player*/"

mediaPlayerDisabledFg: #9dd1ef;\r\n
mediaviewFileBg: COLOR_DARK;\r\n
mediaviewFileNameFg: COLOR_GRAY;\r\n
mediaviewFileSizeFg: COLOR_GRAY;\r\n
mediaviewFileRedCornerFg: #d55959;\r\n
mediaviewFileYellowCornerFg: #e8a659;\r\n
mediaviewFileGreenCornerFg: #49a957;\r\n
mediaviewFileBlueCornerFg: #599dcf;\r\n
mediaviewFileExtFg: activeButtonFg;\r\n
mediaviewMenuBg: #383838;\r\n
mediaviewMenuBgOver: #505050;\r\n
mediaviewMenuBgRipple: #676767;\r\n
mediaviewMenuFg: COLOR_WHITE;\r\n
mediaviewBg: #222222eb;\r\n
mediaviewVideoBg: imageBg;\r\n
mediaviewControlBg: #0000003c;\r\n
mediaviewControlFg: COLOR_WHITE;\r\n
mediaviewCaptionBg: #11111180;\r\n
mediaviewCaptionFg: mediaviewControlFg;\r\n
mediaviewTextLinkFg: #91d9ff;\r\n
mediaviewSaveMsgBg: toastBg;\r\n
mediaviewSaveMsgFg: toastFg;\r\n
mediaviewPlaybackActive: #c7c7c7;\r\n
mediaviewPlaybackInactive: #252525;\r\n
mediaviewPlaybackActiveOver: COLOR_WHITE;\r\n
mediaviewPlaybackInactiveOver: #474747;\r\n
mediaviewPlaybackProgressFg: COLOR_WHITE;\r\n
mediaviewPlaybackIconFg: mediaviewPlaybackActive;\r\n
mediaviewPlaybackIconFgOver: mediaviewPlaybackActiveOver;\r\n
mediaviewTransparentBg: COLOR_WHITE;\r\n
mediaviewTransparentFg: #cccccc;\r\n
notificationBg: COLOR_DARK;     \r\n               ";
/* Notification background";*/



 ?>
