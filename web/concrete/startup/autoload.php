<?php
defined('C5_EXECUTE') or die('Access Denied.');

$classes = array(
	'Log' => array('library','log'),
	'Request' => array('library','request/library'),
	'Response' => array('library', 'response/library'),
	'EditResponse' => array('library', 'response/edit/library'),
	'ResponseAssetGroup' => array('library', 'response/asset_group'),
	'PageEditResponse' => array('library', 'response/edit/page/library'),
	'PageEditVersionResponse' => array('library', 'response/edit/page/version'),
	'Localization' => array('library','localization'),
	'Cookie' => array('library', 'cookie'),
	'Route' => array('library', 'routing/route/library'),
	'RouteCallback' => array('library', 'routing/route/callback/library'),
	'ClosureRouteCallback' => array('library', 'routing/route/callback/closure'),
	'ControllerRouteCallback' => array('library', 'routing/route/callback/controller'),
	'DispatcherRouteCallback' => array('library', 'routing/route/callback/dispatcher'),
	'Router' => array('library', 'routing/router'),
	'PageCache' => array('library', 'page_cache/library'),
	'PageCacheRecord' => array('library', 'page_cache/record'),
	'UnknownPageCacheRecord' => array('library', 'page_cache/unknown_record'),
	'FilePageCache' => array('library', 'page_cache/types/file'),
	'Events' => array('library','events'),
	'Model' => array('library','model'),
	'ItemList' => array('library','item_list/library'),
	'SearchResult' => array('library','search/result/library'),
	'SearchResponse' => array('library', 'response/search'),
	'SearchResultColumn' => array('library', 'search/result/column/library'),
	'SearchResultItem' => array('library', 'search/result/item/library'),
	'SearchResultItemColumn' => array('library', 'search/result/item/column/library'),
	'PageSearchResult' => array('library','search/result/page'),
	'PageSearchResultColumn' => array('library', 'search/result/column/page'),
	'PageSearchResultItem' => array('library','search/result/item/page'),
	'PageSearchResultItemColumn' => array('library','search/result/column/page'),
	'DatabaseItemList' => array('library','item_list/database/library'),
	'DatabaseItemListColumnSet' => array('library','item_list/database/column/set'),
	'DatabaseItemListColumn' => array('library','item_list/database/column/library'),
	'DatabaseItemListAttributeKeyColumn' => array('library','item_list/database/column/attribute_key'),
	'AbstractController' => array('library','controller/abstract'),
	'Controller' => array('library','controller/library'),
	'PageController' => array('library','controller/page'),
	'VersionList' => array('model', 'version_list'),
	'LoginPageController' => array('controller','/login'),
	'PageTypeController' => array('library','controller/page_type'),
	'DashboardController' => array('controller', '/dashboard'),
	'AccountPageController' => array('controller', '/account'),
	'AccountProfileEditPageController' => array('controller', '/account/profile/edit'),
	'Dispatcher' => array('library', 'dispatcher/library'),
	'Asset' => array('library', 'asset/library'),
	'AssetList' => array('library', 'asset/list'),
	'AssetGroup' => array('library', 'asset/group'),
	'AssetPointer' => array('library', 'asset/pointer'),
	'CoreConversationAssetGroup' => array('library', 'asset/groups/conversation'),
	'JavascriptAsset' => array('library', 'asset/types/javascript'),
	'CssAsset' => array('library', 'asset/types/css'),
	'FileType,FileTypeList' => array('library','file/types'),
	'FileImporter' => array('library', 'file/importer'),
	'URL' => array('library', 'url'),
	'Redirect' => array('library', 'redirect/library'),
	'RedirectResponse' => array('library', 'redirect/response'),
	'AbstractView' => array('library','view/abstract'),
	'View' => array('library','view/library'),
	'PageView' => array('library','view/page'),
	'DialogView' => array('library','view/dialog'),
	'ErrorView' => array('library','view/error'),
	'InvalidControllerArgumentException' => array('library', '/exception/invalid_controller_argument'),
	'BlockView' => array('library','block_view'),
	'MailImporter' => array('library','mail/importer'),
	'Archive' => array('library','archive'),
	'Conversation' => array('model','conversation/model'),
	'ConversationMessage' => array('model','conversation/message/model'),
	'ConversationDiscussion' => array('model','conversation/discussion/model'),
	'ConversationDiscussionList' => array('model','conversation/discussion/list'),
	'ConversationMessageThreadedList' => array('model','conversation/message/list/threaded'),
	'ConversationMessageList' => array('model','conversation/message/list/model'),
	'ConversationFlagType' => array('model','conversation/flag_type/model'),
	'ConversationFlagTypeList' => array('model','conversation/flag_type/list'),
	'BannedWord' => array('model','banned_word/model'),
	'BannedWordList' => array('model','banned_word/list'),
	'ConversationMessageRating' => array('model','conversation/message/rating'),
	'FeatureAssignment' => array('model','feature/assignment'),
	'FeatureCategory' => array('model','feature/category'),
	'Feature' => array('model','feature/model'),
	'CollectionVersionFeatureCategory' => array('model','feature/categories/collection_version'),
	'CollectionVersionFeatureAssignment' => array('model','feature/assignments/collection_version'),
	'GatheringItemFeatureCategory' => array('model','feature/categories/gathering_item'),
	'GatheringItemFeatureAssignment' => array('model','feature/assignments/gathering_item'),
	'GatheringItemTemplateType' => array('model','gathering/item/template/type'),
	'FeatureDetail' => array('model','feature/detail'),
	'ConversationFeature' => array('model','feature/features/conversation'),
	'ImageFeature' => array('model','feature/features/image'),
	'ConversationFeatureDetail' => array('model','feature/details/conversation'),
	'ImageFeatureDetail' => array('model','feature/details/image'),
	'ConversationFeatureInterface' => array('model','feature/interfaces/conversation'),
	'ImageFeatureInterface' => array('model','feature/interfaces/image'),
	'ContentImporter' => array('library','content/importer'),
	'ContentExporter' => array('library','content/exporter'),
	'BlockViewTemplate' => array('library','block_view_template'),
	'BlockController' => array('library','block_controller'),
	'AttributeTypeView' => array('library','attribute/view'),
	'AttributeTypeController' => array('library','attribute/controller'),
	'Queue' => array('library','queue'),
	'Gathering' => array('model','gathering/model'),
	'GatheringItem' => array('model','gathering/item/model'),
	'GatheringItemTemplate' => array('model','gathering/item/template/model'),
	'DetailGatheringItemTemplate' => array('model','gathering/item/template/types/detail'),
	'TileGatheringItemTemplate' => array('model','gathering/item/template/types/tile'),
	'TitleDateCommentsTileGatheringItemTemplate' => array('model','gathering/item/template/types/custom/tile/title_date_comments'),
	'GatheringItemList' => array('model','gathering/item/list'),
	'PageGatheringItem' => array('model','gathering/item/types/page'),
	'RssFeedGatheringItem' => array('model','gathering/item/types/rss_feed'),
	'FlickrFeedGatheringItem' => array('model','gathering/item/types/flickr_feed'),
	'GatheringDataSource' => array('model','gathering/data_source/model'),
	'GatheringDataSourceConfiguration' => array('model','gathering/data_source/configuration'),
	'PageGatheringDataSource' => array('model','gathering/data_source/sources/page'),
	'RssFeedGatheringDataSource' => array('model','gathering/data_source/sources/rss_feed'),
	'FlickrFeedGatheringDataSource' => array('model','gathering/data_source/sources/flickr_feed'),
	'PageGatheringDataSourceConfiguration' => array('model','gathering/data_source/sources/configurations/page'),
	'RssFeedGatheringDataSourceConfiguration' => array('model','gathering/data_source/sources/configurations/rss_feed'),
	'FlickrFeedGatheringDataSourceConfiguration' => array('model','gathering/data_source/sources/configurations/flickr_feed'),
	'Area' => array('model','area/model'),
	'AreaLayoutPreset' => array('model','area/layout/preset'),
	'AreaLayoutColumn' => array('model','area/layout_column/model'),
	'CustomAreaLayoutColumn' => array('model','area/layout_column/custom'),
	'ThemeGridAreaLayoutColumn' => array('model','area/layout_column/theme_grid'),
	'AreaLayout' => array('model','area/layout/model'),
	'CustomAreaLayout' => array('model','area/layout/custom'),
	'ThemeGridAreaLayout' => array('model','area/layout/theme_grid'),
	'GlobalArea' => array('model','area/global'),
	'SubArea' => array('model','area/sub'),
	'Marketplace' => array('library', 'marketplace'),
	'AttributeKey' => array('model','attribute/key'),
	'AttributeValue,AttributeValueList' => array('model','attribute/value'),
	'AttributeKeyCategory' => array('model','attribute/category'),
	'AttributeSet' => array('model','attribute/set'),
	'AttributeType' => array('model','attribute/type'),
	'AuthenticationType' => array('model','authentication/type'),
	'AuthenticationTypeController' => array('library','authentication/controller'),
	'Block,BlockRecord' => array('model','block'),
	'Job' => array('model','job'),
	'JobSet' => array('model','job_set'),
	'QueueableJob' => array('model','queueable_job'),
	'CustomStyleRule,CustomStylePreset' => array('model','custom_style'),
	'File' => array('model','file'),
	'FileSet,FileSetFile,FileSetList' => array('model','file_set'),
	'Pile' => array('model','pile'),
	'FileVersion' => array('model','file_version'),
	'PageList' => array('model', 'page_list/model'),
	'PageSearchColumnSet' => array('model', 'page_list/column/set/model'),
	'PageSearchDefaultColumnSet' => array('model', 'page_list/column/set/default'),
	'PageSearchAvailableColumnSet' => array('model', 'page_list/column/set/available'),
	'UserList' => array('model', 'user_list'),
	'FileList' => array('model', 'file_list'),
	'UserPrivateMessage,UserPrivateMessageMailbox,UserPrivateMessageList,UserPrivateMessageLimit' => array('model', 'user_private_message'),
	'PageStatistics' => array('model', 'page_statistics'),
	'UserStatistics' => array('model', 'user_statistics'),
	'BlockType' => array('model','block_type/model'),
	'BlockTypeList' => array('model','block_type/list'),
	'BlockTypeSet' => array('model','block_type/set'),
	'Collection' => array('model','collection'),
	'CollectionVersion' => array('model','collection_version'),
	'CollectionType' => array('model','collection_types'),
	'PageTemplate' => array('model','page_template'),
	'Group,GroupList' => array('model','groups'),
	'GroupSearch' => array('model','search/group'),
	'GroupAutomationController' => array('library','group/automation'),
	'GroupSet' => array('model','group_set'),
	'GroupSetList' => array('model','group_set_list'),
	'Package,PackageList' => array('model','package'),
	'CollectionAttributeKey,CollectionAttributeValue' => array('model','attribute/categories/collection'),
	'FileAttributeKey,FileAttributeValue' => array('model','attribute/categories/file'),
	'UserAttributeKey,UserAttributeValue' => array('model','attribute/categories/user'),
	'Page' => array('model','page'),
	'FileImporter' => array('library','file/importer'),
	'FileTypeInspector' => array('library','file/inspector'),
	'SinglePage' => array('model','single_page'),
	'PageTheme' => array('model','page_theme/model'),
	'PageThemeEditableStyle' => array('model','page_theme/editable_style/model'),
	'PageThemeFile' => array('model','page_theme/file'),
	'PageThemeEditableStyleFont' => array('model','page_theme/editable_style/font'),
	'PageThemeGridFramework' => array('library','page_theme/grid_framework/library'),
	'TwitterBootstrapPageTheme' => array('model','page_theme/custom/twitter_bootstrap'),
	'ConcretePageTheme' => array('model','page_theme/custom/concrete'),
	'RiverThemePageTheme' => array('model','page_theme/custom/river_theme'),
	'NineSixtyPageThemeGridFramework' => array('library','page_theme/grid_framework/types/nine_sixty'),
	'Bootstrap2PageThemeGridFramework' => array('library','page_theme/grid_framework/types/bootstrap2'),
	'Bootstrap3PageThemeGridFramework' => array('library','page_theme/grid_framework/types/bootstrap3'),
	'PermissionAccess' => array('model','permission/access/model'),
	'PermissionAccessEntity' => array('model','permission/access/entity/model'),
	'PermissionAccessEntityType' => array('model','permission/access/entity/type'),
	'UserPermissionAccessEntity' => array('model','permission/access/entity/types/user'),
	'GroupPermissionAccessEntity' => array('model','permission/access/entity/types/group'),
	'GroupCombinationPermissionAccessEntity' => array('model','permission/access/entity/types/group_combination'),
	'GroupSetPermissionAccessEntity' => array('model','permission/access/entity/types/group_set'),
	'PageOwnerPermissionAccessEntity' => array('model','permission/access/entity/types/page_owner'),
	'FileUploaderPermissionAccessEntity' => array('model','permission/access/entity/types/file_uploader'),
	'PermissionAccessListItem' => array('model','permission/access/list_item'),
	'PermissionDuration' => array('model','permission/duration'),
	'PermissionKeyCategory' => array('model','permission/category'),
	'PermissionKey' => array('model','permission/key'),
	'PermissionAssignment' => array('model','permission/assignment'),
	'Permissions' => array('model','permissions'),
	'PermissionResponse' => array('model','permission/response'),
	'PermissionCache' => array('model','permission/cache'),
	'PermissionSet' => array('model','permission/set'),
	'AdminPermissionKey' => array('model','permission/keys/admin'),
	'AdminPermissionAccess' => array('model','permission/access/categories/admin'),
	'AdminPermissionAccessListItem' => array('model','permission/access/list_items/admin'),
	'BasicPagePermissionAssignment' => array('model','permission/assignments/basic_page'),
	'PagePermissionKey' => array('model','permission/keys/page'),
	'PagePermissionAssignment' => array('model','permission/assignments/page'),
	'PagePermissionAccess' => array('model','permission/access/categories/page'),
	'PagePermissionAccessListItem' => array('model','permission/access/list_items/page'),
	'AreaPermissionKey' => array('model','permission/keys/area'),
	'AreaPermissionAssignment' => array('model','permission/assignments/area'),
	'AreaPermissionAccess' => array('model','permission/access/categories/area'),
	'AreaPermissionAccessListItem' => array('model','permission/access/list_items/area'),
	'BasicWorkflowPermissionKey' => array('model','permission/keys/basic_workflow'),
	'BasicWorkflowPermissionAssignment' => array('model','permission/assignments/basic_workflow'),
	'BasicWorkflowPermissionAccess' => array('model','permission/access/categories/basic_workflow'),
	'BasicWorkflowPermissionAccessListItem' => array('model','permission/access/list_items/basic_workflow'),
	'BlockTypePermissionKey' => array('model','permission/keys/block_type'),
	'BlockTypePermissionAssignment' => array('model','permission/assignments/block_type'),
	'BlockTypePermissionAccess' => array('model','permission/access/categories/block_type'),
	'BlockTypePermissionAccessListItem' => array('model','permission/access/list_items/block_type'),
	'BlockPermissionKey' => array('model','permission/keys/block'),
	'BlockPermissionAssignment' => array('model','permission/assignments/block'),
	'BlockPermissionAccess' => array('model','permission/access/categories/block'),
	'BlockPermissionAccessListItem' => array('model','permission/access/list_items/block'),
	'FileSetPermissionKey' => array('model','permission/keys/file_set'),
	'FileSetPermissionAssignment' => array('model','permission/assignments/file_set'),
	'FileSetPermissionAccess' => array('model','permission/access/categories/file_set'),
	'FileSetPermissionAccessListItem' => array('model','permission/access/list_items/file_set'),
	'FilePermissionKey' => array('model','permission/keys/file'),
	'FilePermissionAssignment' => array('model','permission/assignments/file'),
	'FilePermissionAccess' => array('model','permission/access/categories/file'),
	'FilePermissionAccessListItem' => array('model','permission/access/list_items/file'),
	'MarketplaceNewsflowPermissionKey' => array('model','permission/keys/marketplace_newsflow'),
	'MarketplaceNewsflowPermissionAssignment' => array('model','permission/assignments/marketplace_newsflow'),
	'MarketplaceNewsflowPermissionAccess' => array('model','permission/access/categories/marketplace_newsflow'),
	'MarketplaceNewsflowPermissionAccessListItem' => array('model','permission/access/list_items/marketplace_newsflow'),
	'PagePermissionKey' => array('model','permission/keys/page'),
	'PagePermissionAssignment' => array('model','permission/assignments/page'),
	'PagePermissionAccess' => array('model','permission/access/categories/page'),
	'PagePermissionAccessListItem' => array('model','permission/access/list_items/page'),
	'SinglePagePermissionKey' => array('model','permission/keys/single_page'),
	'SinglePagePermissionAssignment' => array('model','permission/assignments/single_page'),
	'SinglePagePermissionAccess' => array('model','permission/access/categories/single_page'),
	'SinglePagePermissionAccessListItem' => array('model','permission/access/list_items/single_page'),
	'SitemapPermissionKey' => array('model','permission/keys/sitemap'),
	'SitemapPermissionAssignment' => array('model','permission/assignments/sitemap'),
	'SitemapPermissionAccess' => array('model','permission/access/categories/sitemap'),
	'SitemapPermissionAccessListItem' => array('model','permission/access/list_items/sitemap'),
	'StackPermissionKey' => array('model','permission/keys/stack'),
	'StackPermissionAssignment' => array('model','permission/assignments/stack'),
	'StackPermissionAccess' => array('model','permission/access/categories/stack'),
	'StackPermissionAccessListItem' => array('model','permission/access/list_items/stack'),
	'UserPermissionKey' => array('model','permission/keys/user'),
	'UserPermissionAssignment' => array('model','permission/assignments/user'),
	'UserPermissionAccess' => array('model','permission/access/categories/user'),
	'UserPermissionAccessListItem' => array('model','permission/access/list_items/user'),
	'WorkflowPermissionKey' => array('model','permission/keys/workflow'),
	'WorkflowPermissionAccess' => array('model','permission/access/categories/workflow'),
	'TaskPermission' => array('model','permission/legacy/task'),
	'FilePermissions' => array('model','permission/legacy/file'),
	'PageContentPermissionTimedAssignment' => array('model','permission/assignments/page/timed_content'),
	'AccessUserSearchUserPermissionKey' => array('model','permission/keys/custom/access_user_search'),
	'AccessUserSearchUserPermissionAccess' => array('model','permission/access/categories/custom/access_user_search'),
	'AccessUserSearchUserPermissionAccessListItem' => array('model','permission/access/list_items/custom/access_user_search'),
	'AddBlockBlockTypePermissionKey' => array('model','permission/keys/custom/add_block'),
	'AddBlockBlockTypePermissionAccess' => array('model','permission/access/categories/custom/add_block'),
	'AddBlockBlockTypePermissionAccessListItem' => array('model','permission/access/list_items/custom/add_block'),
	'AddBlockToAreaAreaPermissionKey' => array('model','permission/keys/custom/add_block_to_area'),
	'AddBlockToAreaAreaPermissionAccess' => array('model','permission/access/categories/custom/add_block_to_area'),
	'AddBlockToAreaAreaPermissionAccessListItem' => array('model','permission/access/list_items/custom/add_block_to_area'),
	'AddFileFileSetPermissionKey' => array('model','permission/keys/custom/add_file'),
	'AddFileFileSetPermissionAccess' => array('model','permission/access/categories/custom/add_file'),
	'AddFileFileSetPermissionAccessListItem' => array('model','permission/access/list_items/custom/add_file'),
	'AddSubpagePagePermissionKey' => array('model','permission/keys/custom/add_subpage'),
	'AddSubpagePagePermissionAccess' => array('model','permission/access/categories/custom/add_subpage'),
	'AddSubpagePagePermissionAccessListItem' => array('model','permission/access/list_items/custom/add_subpage'),
	'AssignUserGroupsUserPermissionKey' => array('model','permission/keys/custom/assign_user_groups'),
	'AssignUserGroupsUserPermissionAccess' => array('model','permission/access/categories/custom/assign_user_groups'),
	'AssignUserGroupsUserPermissionAccessListItem' => array('model','permission/access/list_items/custom/assign_user_groups'),
	'EditPagePropertiesPagePermissionKey' => array('model','permission/keys/custom/edit_page_properties'),
	'EditPagePropertiesPagePermissionAccess' => array('model','permission/access/categories/custom/edit_page_properties'),
	'EditPagePropertiesPagePermissionAccessListItem' => array('model','permission/access/list_items/custom/edit_page_properties'),
	'EditPageThemePagePermissionKey' => array('model','permission/keys/custom/edit_page_theme'),
	'EditPageThemePagePermissionAccess' => array('model','permission/access/categories/custom/edit_page_theme'),
	'EditPageThemePagePermissionAccessListItem' => array('model','permission/access/list_items/custom/edit_page_theme'),
	'EditUserPropertiesUserPermissionKey' => array('model','permission/keys/custom/edit_user_properties'),
	'EditUserPropertiesUserPermissionAccess' => array('model','permission/access/categories/custom/edit_user_properties'),
	'EditUserPropertiesUserPermissionAccessListItem' => array('model','permission/access/list_items/custom/edit_user_properties'),
	'ViewUserAttributesUserPermissionKey' => array('model','permission/keys/custom/view_user_attributes'),
	'ViewUserAttributesUserPermissionAccess' => array('model','permission/access/categories/custom/view_user_attributes'),
	'ViewUserAttributesUserPermissionAccessListItem' => array('model','permission/access/list_items/custom/view_user_attributes'),
	'AreaPermissionResponse' => array('model','permission/response/area'),
	'BlockPermissionResponse' => array('model','permission/response/block'),
	'CollectionVersionPermissionResponse' => array('model','permission/response/collection_version'),
	'FileSetPermissionResponse' => array('model','permission/response/file_set'),
	'FilePermissionResponse' => array('model','permission/response/file'),
	'PagePermissionResponse' => array('model','permission/response/page'),
	'SinglePagePermissionResponse' => array('model','permission/response/single_page'),
	'StackPermissionResponse' => array('model','permission/response/stack'),
	'Workflow' => array('model','workflow/model'),
	'EmptyWorkflow' => array('model','workflow/empty'),
	'BasicWorkflow,BasicWorkflowHistoryEntry' => array('model','workflow/types/basic'),
	'BasicWorkflowProgressData' => array('model','workflow/types/basic/data'),
	'WorkflowDescription' => array('model','workflow/description'),
	'WorkflowProgress' => array('model','workflow/progress/model'),
	'WorkflowProgressCategory' => array('model','workflow/progress/category'),
	'WorkflowProgressHistory,WorkflowHistoryEntry' => array('model','workflow/progress/history'),
	'WorkflowProgressResponse' => array('model','workflow/progress/response'),
	'WorkflowProgressAction,WorkflowProgressCancelAction,WorkflowProgressApprovalAction' => array('model','workflow/progress/action'),
	'PageWorkflowProgress' => array('model','workflow/progress/categories/page'),
	'WorkflowRequest' => array('model','workflow/request/model'),
	'PageWorkflowRequest' => array('model','workflow/request/categories/page'),
	'ApprovePagePageWorkflowRequest' => array('model','workflow/request/requests/approve_page'),
	'ChangePagePermissionsPageWorkflowRequest' => array('model','workflow/request/requests/change_page_permissions'),
	'ChangePagePermissionsInheritancePageWorkflowRequest' => array('model','workflow/request/requests/change_page_permissions_inheritance'),
	'ChangeSubpageDefaultsInheritancePageWorkflowRequest' => array('model','workflow/request/requests/change_subpage_defaults_inheritance'),
	'DeletePagePageWorkflowRequest' => array('model','workflow/request/requests/delete_page'),
	'MovePagePageWorkflowRequest' => array('model','workflow/request/requests/move_page'),
	'WorkflowType' => array('model','workflow/type'),
	'User' => array('model','user'),
	'UserInfo' => array('model','userinfo'),
	'UserPointActionList' => array('model','user_point/action_list'),
	'UserPointAction' => array('model','user_point/action'),
	'WonBadgeUserPointAction,WonBadgeUserPointActionDescription' => array('model','user_point/actions/won_badge'),
	'UserPointActionDescription' => array('model','user_point/action_description'),
	'UserPointActivityList' => array('model','user_point/activity'),
	'UserPointEntryList' => array('model','user_point/entry_list'),
	'UserPointEntry' => array('model','user_point/entry'),
	'UserBannedIP' => array('model','user_banned_ip'),
	'Stack' => array('model','stack/model'),
	'StackList' => array('model','stack/list'),
	'ConversationEditor' => array('model','conversation/editor/model'),
	'PlainTextConversationEditor' => array('model', 'conversation/editor/types/plain_text'),
	'RedactorConversationEditor' => array('model', 'conversation/editor/types/redactor'),
	'MarkdownConversationEditor' => array('model', 'conversation/editor/types/markdown'),
	'ConversationRatingType' => array('model','conversation/rating/type'),
	'UpVoteConversationRatingType' => array('model', 'conversation/rating/types/up_vote'),
	'DownVoteConversationRatingType' => array('model', 'conversation/rating/types/down_vote'),
	'SystemAntispamLibrary' => array('model','system/antispam/library'),
	'SystemCaptchaLibrary' => array('model','system/captcha/library'),
	'SystemCaptchaTypeController' => array('model','system/captcha/controller'),
	'PageNameSystemContentEditorSnippet' => array('model','system/content_editor/snippets/page_name'),
	'UserNameSystemContentEditorSnippet' => array('model','system/content_editor/snippets/user_name'),
	'SystemContentEditorSnippet' => array('model','system/content_editor/snippet'),
	'SecurimageSystemCaptchaTypeController' => array('model','system/captcha/types/securimage/controller'),
	'Zend_Queue_Adapter_Concrete5' => array('library', 'Zend/Queue/Adapter/Concrete5'),
	'GatheringPermissionKey' => array('model','permission/keys/gathering'),
	'GatheringPermissionAssignment' => array('model','permission/assignments/gathering'),
	'GatheringPermissionAccess' => array('model','permission/access/categories/gathering'),
	'GatheringPermissionAccessListItem' => array('model','permission/access/list_items/gathering'),
	'GatheringPermissionResponse' => array('model','permission/response/gathering'),
	'PageType' => array('model', 'page_type/model'),
	'PageTypePublishTargetType' => array('model','page_type/publish/target/type'),
	'PageTypePublishTargetConfiguration' => array('model','page_type/publish/target/configuration'),
	'PageTypeComposerFormLayoutSet' => array('model','page_type/composer/form/layout_set/model'),
	'PageTypeComposerOutputControl' => array('model','page_type/composer/output/control'),
	'AllPageTypePublishTargetType' => array('model','page_type/publish/target/types/all'),
	'PageTypePageTypePublishTargetType' => array('model','page_type/publish/target/types/page_type'),
	'ParentPagePageTypePublishTargetType' => array('model','page_type/publish/target/types/parent_page'),
	'AllPageTypePublishTargetConfiguration' => array('model','page_type/publish/target/types/configurations/all'),
	'PageTypePageTypePublishTargetConfiguration' => array('model','page_type/publish/target/types/configurations/page_type'),
	'ParentPagePageTypePublishTargetConfiguration' => array('model','page_type/publish/target/types/configurations/parent_page'),
	'PageTypeComposerControlType' => array('model','page_type/composer/control/type'),
	'CorePagePropertyPageTypeComposerControlType' => array('model','page_type/composer/control/types/core_page_property'),
	'CollectionAttributePageTypeComposerControlType' => array('model','page_type/composer/control/types/collection_attribute'),
	'BlockPageTypeComposerControlType' => array('model','page_type/composer/control/types/block'),
	'PageTypeComposerControl' => array('model','page_type/composer/control/model'),
	'PageTypeComposerControlCustomTemplate' => array('model', 'page_type/composer/control/custom_template'),
	'CorePagePropertyPageTypeComposerControl' => array('model','page_type/composer/control/controls/core_page_property'),
	'CollectionAttributePageTypeComposerControl' => array('model','page_type/composer/control/controls/collection_attribute'),
	'BlockPageTypeComposerControl' => array('model','page_type/composer/control/controls/block'),
	'PageTypeComposerFormLayoutSetControl' => array('model','page_type/composer/form/layout_set/control'),
	'PageTypePublishResponse' => array('model','page_type/publish/response'),
	'NameCorePagePropertyPageTypeComposerControl' => array('model','page_type/composer/control/controls/core_page_property/name'),
	'UrlSlugCorePagePropertyPageTypeComposerControl' => array('model','page_type/composer/control/controls/core_page_property/url_slug'),
	'DateTimeCorePagePropertyPageTypeComposerControl' => array('model','page_type/composer/control/controls/core_page_property/date_time'),
	'DescriptionCorePagePropertyPageTypeComposerControl' => array('model','page_type/composer/control/controls/core_page_property/description'),
	'UserCorePagePropertyPageTypeComposerControl' => array('model','page_type/composer/control/controls/core_page_property/user'),
	'PageTemplateCorePagePropertyPageTypeComposerControl' => array('model','page_type/composer/control/controls/core_page_property/page_template'),
	'PublishTargetCorePagePropertyPageTypeComposerControl' => array('model','page_type/composer/control/controls/core_page_property/publish_target'),
	'PageTypePermissionKey' => array('model','permission/keys/page_type'),
	'PageTypePermissionAssignment' => array('model','permission/assignments/page_type'),
	'PageTypePermissionAccess' => array('model','permission/access/categories/page_type'),
	'PageTypePermissionAccessListItem' => array('model','permission/access/list_items/page_type'),
	'PageTypePermissionResponse' => array('model','permission/response/page_type'),

	/* Editing Controllers */
	'FrontendPageController' => array('controller', '/frontend/page'),
	'PageCheckInPanelController' => array('controller', '/panels/page/check_in'),
	'PageDesignPanelController' => array('controller', '/panels/page/design'),
	'PageDesignCustomizePanelController' => array('controller', '/panels/page/design/customize'),
	'PageVersionsPanelController' => array('controller', '/panels/page/versions'),
	'PageAttributesPanelController' => array('controller', '/panels/page/attributes'),
	'PageVersionsPanelDetailController' => array('controller', '/panels/details/page/versions'),
	'PageSeoPanelDetailController' => array('controller', '/panels/details/page/seo'),
	'PageLocationPanelDetailController' => array('controller', '/panels/details/page/location'),
	'PageComposerPanelDetailController' => array('controller', '/panels/details/page/composer'),
	'PageAttributesPanelDetailController' => array('controller', '/panels/details/page/attributes'),
	'PageCachingPanelDetailController' => array('controller', '/panels/details/page/caching'),
	'PagePermissionsPanelDetailController' => array('controller', '/panels/details/page/permissions'),
	'FrontendStylesheetController' => array('controller', '/frontend/stylesheet'),
	
	'AreaLayoutPresetsDialogController' => array('controller', '/dialogs/area/layout/presets'),
	'PageDeleteDialogController' => array('controller', '/dialogs/page/delete'),
	'PageBulkPropertiesDialogController' => array('controller', '/dialogs/page/bulk/properties'),
	'SearchPagesCustomizeDialogController' => array('controller', '/dialogs/search/pages/customize'),
	'DashboardBaseController' => array('controller', '/dashboard/base'),
	'AccountController' => array('controller', '/account'),
	'AccountProfileEditController' => array('controller', '/account/profile/edit'),
	'Zend_Queue_Adapter_Concrete5' => array('library', 'Zend/Queue/Adapter/Concrete5'),
	'Tree' => array('model', 'tree/model'),
	'TreeType' => array('model', 'tree/type'),
	'TreeNode' => array('model', 'tree/node/model'),
	'TreeNodeType' => array('model', 'tree/node/type'),
	'CategoryTreeNode' => array('model', 'tree/node/types/category'),
	'TreeNodePermissionKey' => array('model','permission/keys/tree/node'),
	'TreeNodePermissionAssignment' => array('model','permission/assignments/tree/node'),
	'TreeNodePermissionAccess' => array('model','permission/access/categories/tree/node'),
	'TreeNodePermissionAccessListItem' => array('model','permission/access/list_items/tree/node'),
	'TreeNodePermissionResponse' => array('model','permission/response/tree/node'),
	'GroupTreeNode' => array('model', 'tree/node/types/group'),
	'GroupTree' => array('model', 'tree/types/group'),
	'GroupTreeNodePermissionKey' => array('model','permission/keys/tree/node/group'),
	'GroupTreeNodePermissionAssignment' => array('model','permission/assignments/tree/node/group'),
	'GroupTreeNodePermissionAccess' => array('model','permission/access/categories/tree/node/group'),
	'GroupTreeNodePermissionAccessListItem' => array('model','permission/access/list_items/tree/node/group'),
	'GroupTreeNodePermissionResponse' => array('model','permission/response/tree/node/group'),
	'GroupPermissionResponse' => array('model','permission/response/group'),
	'UserInfoPermissionResponse' => array('model','permission/response/user_info'),

	/* Topics */
	'TopicTreeNode' => array('model', 'tree/node/types/topic'),
	'TopicCategoryTreeNode' => array('model', 'tree/node/types/topic_category'),
	'TopicTree' => array('model', 'tree/types/topic'),
	'TopicCategoryTreeNodePermissionKey' => array('model','permission/keys/tree/node/topic_category'),
	'TopicCategoryTreeNodePermissionAssignment' => array('model','permission/assignments/tree/node/topic_category'),
	'TopicCategoryTreeNodePermissionAccess' => array('model','permission/access/categories/tree/node/topic_category'),
	'TopicCategoryTreeNodePermissionAccessListItem' => array('model','permission/access/list_items/tree/node/topic_category'),
	'TopicCategoryTreeNodePermissionResponse' => array('model','permission/response/tree/node/topic_category'),
	'TopicTreeNodePermissionKey' => array('model','permission/keys/tree/node/topic'),
	'TopicTreeNodePermissionAssignment' => array('model','permission/assignments/tree/node/topic'),
	'TopicTreeNodePermissionAccess' => array('model','permission/access/categories/tree/node/topic'),
	'TopicTreeNodePermissionAccessListItem' => array('model','permission/access/list_items/tree/node/topic'),
	'TopicTreeNodePermissionResponse' => array('model','permission/response/tree/node/topic')

);

Loader::registerAutoload($classes);
spl_autoload_register(array('Loader', 'autoloadCore'), true);
spl_autoload_register(array('Loader', 'autoload'), true);
require_once(DIR_LIBRARIES_3RDPARTY_CORE. '/autoload.php');
