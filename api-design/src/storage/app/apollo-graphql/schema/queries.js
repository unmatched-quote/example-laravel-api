const queries = `
    type Query {
        claimListing(page: Int, limit: Int, sortBy: String, desc: Boolean, claimNumber: Int, claimNumberLike: Int, policyIdentifier: Int, policyIdentifierLike: Int, createdFrom: String, createdTo: String, status_uuid: String, type_uuid: String, subtype_uuid: String, date_of_loss: String, handler_user_id: Int, handler_company_id: Int): ClaimListingPaginated!
        claimReadWithEavByUuid(uuid: String!): ClaimWithEAV!
        claimReadById(id: Int!, revision_uuid: String, revision: Int): ClaimAndRevisionData!
        claimReadByUuid(uuid: String!, revision_uuid: String, revision: Int): ClaimAndRevisionData!
        claimReadWithRevisionsByUuid(uuid: String!): ClaimAndRevisionsData!
        claimReadTransitionsById(id: Int!): Transitions!
        claimReadTransitionsByUuid(uuid: String!): Transitions!
        claimCommentListing(uuid: String!, page: Int, limit: Int, sortBy: String, desc: Boolean, showDeleted: Boolean, revision_uuid: String, status_uuid: String, revision: Int): ClaimCommentListingPaginated!
        claimReadAllowedStatusesById(id: Int!): [ClaimStatus!]!
        claim2SectionListing(page: Int, limit: Int, sortBy: String, desc: Boolean): Claim2SectionListingPaginated!
        claim2SectionReadById(id: Int!): Claim2Section!
        claimCommentReadById(id: Int!): ClaimComment!
        claimLogListing(page: Int, limit: Int, sortBy: String, desc: Boolean): ClaimLogListingPaginated!
        claimLogReadById(id: Int!): ClaimLog!
        claimNotificationScheduledTaskListing(page: Int, limit: Int, sortBy: String, desc: Boolean): ClaimNotificationScheduledTaskListingPaginated!
        claimNotificationScheduledTaskReadByUuid(uuid: String!): ClaimNotificationScheduledTask!
        claimNotificationTemplateListing(page: Int, limit: Int, sortBy: String, desc: Boolean): ClaimNotificationTemplateListingPaginated!
        claimNotificationTemplateReadById(id: Int!): ClaimNotificationTemplate!
        claimNotificationTopicListing(page: Int, limit: Int, sortBy: String, desc: Boolean): ClaimNotificationTopicListingPaginated!
        claimNotificationTopicReadById(id: Int!): ClaimNotificationTopic!
        claimNotificationTypeListing(page: Int, limit: Int, sortBy: String, desc: Boolean): ClaimNotificationTypeListingPaginated!
        claimNotificationTypeReadById(id: Int!): ClaimNotificationType!
        claimSettlementListing(page: Int, limit: Int, sortBy: String, desc: Boolean): ClaimSettlementListingPaginated!
        claimSettlementReadByUuid(uuid: String!): ClaimSettlement!
        claimSettlementReadTransitionsById(id: Int!): Transitions!
        claimSettlementReadTransitionsByUuid(uuid: String!): Transitions!
        claimSettlement2ClaimSettlementRecoveryListing(page: Int, limit: Int, sortBy: String, desc: Boolean): ClaimSettlement2ClaimSettlementRecoveryListingPaginated!
        claimSettlement2ClaimSettlementRecoveryReadById(id: Int!): ClaimSettlement2ClaimSettlementRecovery!
        claimSettlement2FileListing(page: Int, limit: Int, sortBy: String, desc: Boolean): ClaimSettlement2FileListingPaginated!
        claimSettlement2FileReadById(id: Int!): ClaimSettlement2File!
        claimSettlementLogListing(page: Int, limit: Int, sortBy: String, desc: Boolean): ClaimSettlementLogListingPaginated!
        claimSettlementLogReadById(id: Int!): ClaimSettlementLog!
        claimSettlementNotificationTemplateListing(page: Int, limit: Int, sortBy: String, desc: Boolean): ClaimSettlementNotificationTemplateListingPaginated!
        claimSettlementNotificationTemplateReadById(id: Int!): ClaimSettlementNotificationTemplate!
        claimSettlementPaymentTemplateListing(page: Int, limit: Int, sortBy: String, desc: Boolean): ClaimSettlementPaymentTemplateListingPaginated!
        claimSettlementPaymentTemplateReadByUuid(uuid: String!): ClaimSettlementPaymentTemplate!
        claimSettlementRecoveryListing(page: Int, limit: Int, sortBy: String, desc: Boolean): ClaimSettlementRecoveryListingPaginated!
        claimSettlementRecoveryReadByUuid(uuid: String!): ClaimSettlementRecovery!
        claimSettlementRecoveryStatusListing(page: Int, limit: Int, sortBy: String, desc: Boolean): ClaimSettlementRecoveryStatusListingPaginated!
        claimSettlementRecoveryStatusReadById(id: Int!): ClaimSettlementRecoveryStatus!
        claimSettlementRecoveryTypeListing(page: Int, limit: Int, sortBy: String, desc: Boolean): ClaimSettlementRecoveryTypeListingPaginated!
        claimSettlementRecoveryTypeReadByUuid(uuid: String!): ClaimSettlementRecoveryType!
        claimSettlementStatusListing(page: Int, limit: Int, sortBy: String, desc: Boolean): ClaimSettlementStatusListingPaginated!
        claimSettlementStatusReadByUuid(uuid: String!): ClaimSettlementStatus!
        claimSettlementTypeListing(page: Int, limit: Int, sortBy: String, desc: Boolean): ClaimSettlementTypeListingPaginated!
        claimSettlementTypeReadByUuid(uuid: String!): ClaimSettlementType!
        claimSettlementType2NotificationTopicListing(page: Int, limit: Int, sortBy: String, desc: Boolean): ClaimSettlementType2NotificationTopicListingPaginated!
        claimSettlementType2NotificationTopicReadById(id: Int!): ClaimSettlementType2NotificationTopic!
        claimSettlementType2WorkflowListing(page: Int, limit: Int, sortBy: String, desc: Boolean): ClaimSettlementType2WorkflowListingPaginated!
        claimSettlementType2WorkflowReadById(id: Int!): ClaimSettlementType2Workflow!
        claimSettlementUser2NotificationListing(page: Int, limit: Int, sortBy: String, desc: Boolean): ClaimSettlementUser2NotificationListingPaginated!
        claimSettlementUser2NotificationReadById(id: Int!): ClaimSettlementUser2Notification!
        claimStatusListing(page: Int, limit: Int, sortBy: String, desc: Boolean): ClaimStatusListingPaginated!
        claimStatusReadByUuid(uuid: String!): ClaimStatus!
        claimStatus2EAVReadById(id: Int!): ClaimStatus2EAV!
        claimTypeListing(page: Int, limit: Int, sortBy: String, desc: Boolean, parent_uuid: String, product_uuid: String): ClaimTypeListingPaginated!
        claimTypeReadByUuid(uuid: String!): ClaimType!
        claimTypeReadAllowedStatusesById(id: Int!): [ClaimStatus!]!
        claimTypeReadProductsByUuid(uuid: String!): [String!]!
        claimType2DefaultValueListing(page: Int, limit: Int, sortBy: String, desc: Boolean): ClaimType2DefaultValueListingPaginated!
        claimType2DefaultValueReadById(id: Int!): ClaimType2DefaultValue!
        claimType2DefaultSectionListing(page: Int, limit: Int, sortBy: String, desc: Boolean): ClaimType2DefaultSectionListingPaginated!
        claimType2DefaultSectionReadByUuid(uuid: String!): ClaimType2DefaultSection!
        getClaimTypeWithEAVCollection: TypeWithEAVCollection!
        claimType2EAVListing(page: Int, limit: Int, sortBy: String, desc: Boolean, claimTypeUuids: [String!]): ClaimType2EAVListingPaginated!
        claimType2EAVReadById(id: Int!): ClaimType2EAV!
        claimType2NotificationTopicListing(page: Int, limit: Int, sortBy: String, desc: Boolean): ClaimType2NotificationTopicListingPaginated!
        claimType2NotificationTopicReadById(id: Int!): ClaimType2NotificationTopic!
        claimType2WorkflowListing(page: Int, limit: Int, sortBy: String, desc: Boolean): ClaimType2WorkflowListingPaginated!
        claimType2WorkflowReadById(id: Int!): ClaimType2Workflow!
        claimType2ProductListing(page: Int, limit: Int, sortBy: String, desc: Boolean): ClaimType2ProductListingPaginated!
        claimType2ProductReadById(id: Int!): ClaimType2Product!
        claimUser2NotificationListing(page: Int, limit: Int, sortBy: String, desc: Boolean): ClaimUser2NotificationListingPaginated!
        claimUser2NotificationReadById(id: Int!): ClaimUser2Notification!
        claimUser2NotificationTopicListing(page: Int, limit: Int, sortBy: String, desc: Boolean): ClaimUser2NotificationTopicListingPaginated!
        claimUser2NotificationTopicReadById(id: Int!): ClaimUser2NotificationTopic!
        claimUser2SubscribedClaimSettlementStatusListing(page: Int, limit: Int, sortBy: String, desc: Boolean, user_id: Int): ClaimUser2SubscribedClaimSettlementStatusListingPaginated!
        claimUser2SubscribedClaimSettlementStatusReadById(id: Int!): ClaimUser2SubscribedClaimSettlementStatus!
        claimUser2SubscribedClaimStatusListing(page: Int, limit: Int, sortBy: String, desc: Boolean, user_id: Int): ClaimUser2SubscribedClaimStatusListingPaginated!
        claimUser2SubscribedClaimStatusReadById(id: Int!): ClaimUser2SubscribedClaimStatus!
        claimWorkflowListing(page: Int, limit: Int, sortBy: String, desc: Boolean): ClaimWorkflowDataListingPaginated!
        claimWorkflowReadById(id: Int!): ClaimWorkflowData!
        claimWorkflowReadByUuid(uuid: String!): ClaimWorkflowData!
        getEAVObjectFields(uuid: String!): EAVObject!
        getEAVObjectDefinition(uuid: String!): EAVObjectDefinition!
        getDatabasesConnected: DatabasesConnected!
        getProductStepperByUUID(uuid: String!): Stepper!
    }
`;

module.exports = {queries};