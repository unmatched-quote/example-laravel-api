const mutations = `
    type Mutation {
        claimCreate(policy_id: Int!, owner_id: Int!, company_id: Int, status_id: Int!, type_id: Int!, subtype_id: Int!, custom_id: String, external_ref: String, parent_uuid: String): ClaimAndRevision!
        claimUpdateByUuid(uuid: String!, owner_id: Int!, status_id: Int!, type_id: Int!, subtype_id: Int!): ClaimAndRevision!
        claimDeleteByUuid(uuid: String!): Any
        claimCommentCreate(uuid: String!, comment: String!, revision: Int): ClaimComment!
        claim2SectionCreate(section_type_id: Int!, claim_id: Int!, revision_id: Int!, eoc_id: Int!, payee_id: Int!, apply_surplus_percentage: Boolean!, amount_reserved: Float!, amount_deductible: Float, amount_loss_adjusters_fee: Float, amount_settlement_paid: Float): Claim2Section!
        claim2SectionUpdateById(id: Int!, section_type_id: Int!, claim_id: Int!, revision_id: Int!, eoc_id: Int!, payee_id: Int!, apply_surplus_percentage: Boolean!, amount_reserved: Float!, amount_deductible: Float, amount_loss_adjusters_fee: Float, amount_settlement_paid: Float): Claim2Section!
        claim2SectionDeleteById(id: Int!): Any
        claimCommentUpdateById(id: Int!, comment: String!): ClaimComment!
        claimCommentReadDeleteById(id: Int!): Any
        claimLogCreate(claim_id: Int!, user_id: Int!, log_data: Int!): ClaimLog!
        claimNotificationScheduledTaskCreate(title: String!, schedule: String!, logic: Any!): ClaimNotificationScheduledTask!
        claimNotificationScheduledTaskUpdateByUuid(uuid: String!, title: String!, schedule: String!, logic: Any!): ClaimNotificationScheduledTask!
        claimNotificationScheduledTaskDeleteByUuid(uuid: String!): Any
        claimNotificationTemplateCreate(title: String!, status_id: Int!, type: String!, template: Any!): ClaimNotificationTemplate!
        claimNotificationTemplateUpdateById(id: Int!, title: String!, status_id: Int!, type: String!, template: Any!): ClaimNotificationTemplate!
        claimNotificationTemplateReadDeleteById(id: Int!): Any
        claimNotificationTopicCreate(title: String!, driver_logic: Any!): ClaimNotificationTopic!
        claimNotificationTopicUpdateById(id: Int!, title: String!, driver_logic: Any!): ClaimNotificationTopic!
        claimNotificationTopicReadDeleteById(id: Int!): Any
        claimNotificationTypeCreate(title: String!, duration: Any!, is_summarised: Boolean!): ClaimNotificationType!
        claimNotificationTypeUpdateById(id: Int!, title: String!, duration: Any!, is_summarised: Boolean!): ClaimNotificationType!
        claimNotificationTypeReadDeleteById(id: Int!): Any
        claimSettlementCreate(claim_uuid: String!, company_id: Int!, settlement_type_uuid: String!, settlement_status_uuid: String!, date_settlement_agreed: String!, amount_settlement: Float!, date_paid: String, date_settlement_period_from: String, date_settlement_period_to: String, journal_id: String, comment: String, section_id: String): ClaimSettlement!
        claimSettlementUpdateByUuid(uuid: String!, claim_uuid: String!, company_id: Int!, settlement_type_uuid: String!, settlement_status_uuid: String!, date_settlement_agreed: String!, amount_settlement: Float!, date_paid: String, date_settlement_period_from: String, date_settlement_period_to: String, journal_id: String, comment: String, section_id: String): ClaimSettlement!
        claimSettlementDeleteByUuid(uuid: String!): Any
        claimSettlement2ClaimSettlementRecoveryCreate(settlement_id: Int!, settlement_recovery_id: Int!, from_account_id: Int!, to_account_id: Int!, is_paid: Boolean!, journal_id: Int): ClaimSettlement2ClaimSettlementRecovery!
        claimSettlement2ClaimSettlementRecoveryUpdateById(id: Int!, settlement_id: Int!, settlement_recovery_id: Int!, from_account_id: Int!, to_account_id: Int!, is_paid: Boolean!, journal_id: Int): ClaimSettlement2ClaimSettlementRecovery!
        claimSettlement2ClaimSettlementRecoveryReadDeleteById(id: Int!): Any
        claimSettlement2FileCreate(claim_settlement_id: String!, file_name: Int!, file_mime_type: String!, settlement_file: Any!): ClaimSettlement2File!
        claimSettlement2FileUpdateById(id: Int!, claim_settlement_id: String!, file_name: Int!, file_mime_type: String!): ClaimSettlement2File!
        claimSettlement2FileReadDeleteById(id: Int!): Any
        claimSettlementLogCreate(settlement_id: Int!, user_id: Int!, log_data: Any!): ClaimSettlementLog!
        claimSettlementNotificationTemplateCreate(title: String!, status_id: Int!, type: String!, template: Any!): ClaimSettlementNotificationTemplate!
        claimSettlementNotificationTemplateUpdateById(id: Int!, title: String!, status_id: Int!, type: String!, template: Any!): ClaimSettlementNotificationTemplate!
        claimSettlementNotificationTemplateReadDeleteById(id: Int!): Any
        claimSettlementPaymentTemplateCreate(title: String!, template: String!): ClaimSettlementPaymentTemplate!
        claimSettlementPaymentTemplateUpdateByUuid(uuid: String!, title: String!, template: String!): ClaimSettlementPaymentTemplate!
        claimSettlementPaymentTemplateDeleteByUuid(uuid: String!): Any
        claimSettlementRecoveryCreate(company_id: Int!, journal_id: Int!, settlement_rec_status_id: Int!, settlement_rec_type_id: Int!, amount_settlement_recovery: Float!, comments: String, date_range_begin: String, date_range_end: String!, date_transactions: String, finalised_at: String): ClaimSettlementRecovery!
        claimSettlementRecoveryUpdateByUuid(uuid: String!, company_id: Int!, journal_id: Int!, settlement_rec_status_id: Int!, settlement_rec_type_id: Int!, amount_settlement_recovery: Float!, comments: String, date_range_begin: String, date_range_end: String!, date_transactions: String, finalised_at: String): ClaimSettlementRecovery!
        claimSettlementRecoveryDeleteByUuid(uuid: String!): Any
        claimSettlementRecoverySetSettlements(settlement_ids: [Int!]!, from_account_id: Int!, to_account_id: Int!, is_paid: Boolean!, journal_id: Int): [ClaimSettlement2ClaimSettlementRecovery!]!
        claimSettlementRecoveryStatusCreate(title: String!): ClaimSettlementRecoveryStatus!
        claimSettlementRecoveryStatusUpdateByUuid(uuid: String!, title: String!): ClaimSettlementRecoveryStatus!
        claimSettlementRecoveryStatusDeleteByUuid(id: Int!): Any
        claimSettlementRecoveryTypeCreate(title: String!, accounting_workflow_uuid: String!, section_id: Int): ClaimSettlementRecoveryType!
        claimSettlementRecoveryTypeUpdateByUuid(uuid: String!, title: String!, accounting_workflow_uuid: String!, section_id: Int): ClaimSettlementRecoveryType!
        claimSettlementRecoveryTypeDeleteByUuid(uuid: String!): Any
        claimSettlementStatusCreate(title: String!): ClaimSettlementStatus!
        claimSettlementStatusUpdateByUuid(uuid: String!, title: String!): ClaimSettlementStatus!
        claimSettlementStatusDeleteByUuid(uuid: String!): Any
        claimSettlementTypeCreate(title: String!, parent_uuid: String, accounting_workflow_uuid: String): ClaimSettlementType!
        claimSettlementTypeUpdateByUuid(uuid: String!, title: String!, parent_uuid: String, accounting_workflow_uuid: String): ClaimSettlementType!
        claimSettlementTypeDeleteByUuid(uuid: String!): Any
        claimSettlementType2NotificationTopicCreate(settlement_type_id: Int!, topic_id: Int!, notification_type_id: Int!): ClaimSettlementType2NotificationTopic!
        claimSettlementType2NotificationTopicUpdateById(id: Int!, settlement_type_id: Int!, topic_id: Int!, notification_type_id: Int!): ClaimSettlementType2NotificationTopic!
        claimSettlementType2NotificationTopicReadDeleteById(id: Int!): Any
        claimSettlementType2WorkflowCreate(settlement_type_uuid: String!, workflow_uuid: String!): ClaimSettlementType2Workflow!
        claimSettlementType2WorkflowUpdateById(id: Int!, settlement_type_uuid: String!, workflow_uuid: String!): ClaimSettlementType2Workflow!
        claimSettlementType2WorkflowReadDeleteById(id: Int!): Any
        claimSettlementUser2NotificationCreate(user_id: Int!, settlement_id: Int!, users2topic_id: Int!, comment: String): ClaimSettlementUser2Notification!
        claimSettlementUser2NotificationUpdateById(id: Int!, user_id: Int!, settlement_id: Int!, users2topic_id: Int!, comment: String): ClaimSettlementUser2Notification!
        claimSettlementUser2NotificationReadDeleteById(id: Int!): Any
        claimStatusCreate(title: String!): ClaimStatus!
        claimStatusUpdateByUuid(uuid: String!, title: String!): ClaimStatus!
        claimStatusDeleteByUuid(uuid: String!): Any
        claimStatus2EAVListing(page: Int, limit: Int, sortBy: String, desc: Boolean, status_uuid: String): ClaimStatus2EAVListingPaginated!
        claimStatus2EAVCreate(status_uuid: String!, eav_object_uuid: String!, eav_object_revision_uuid: String!): ClaimStatus2EAV!
        claimStatus2EAVUpdateById(id: Int!, status_uuid: String!, eav_object_uuid: String!, eav_object_revision_uuid: String!): ClaimStatus2EAV!
        claimStatus2EAVDeleteById(id: Int!): Any
        claimTypeCreate(title: String!, parent_uuid: String, amount_deductible_default: Float, amount_loss_adjusters_fee_default: Float, amount_reserve_default: Float): ClaimType!
        claimTypeUpdateByUuid(uuid: String!, title: String!, parent_uuid: String, amount_deductible_default: Float, amount_loss_adjusters_fee_default: Float, amount_reserve_default: Float): ClaimType!
        claimTypeDeleteByUuid(uuid: String!): Any
        claimType2DefaultValueCreate(claim_type_uuid: String!, product_uuid: String!, section_uuids: [String!]!, amount_default_reserve: Float!, amount_default_deductible: Float!, amount_default_loss_adjusters_fee: Float!, date_effective: String!): ClaimType2DefaultValue!
        claimType2DefaultValueUpdateById(id: Int!, claim_type_uuid: String!, product_uuid: String!, section_uuids: [String!]!, amount_default_reserve: Float!, amount_default_deductible: Float!, amount_default_loss_adjusters_fee: Float!, date_effective: String!): ClaimType2DefaultValue!
        claimType2DefaultValueReadDeleteById(id: Int!): Any
        claimType2DefaultSectionCreate(claim_type_uuid: String!, title: String!, payee_id: Int!, date_effective: String!): ClaimType2DefaultSection!
        claimType2DefaultSectionUpdateByUuid(uuid: String!, claim_type_uuid: String!, title: String!, payee_id: Int!, date_effective: String!): ClaimType2DefaultSection!
        claimType2DefaultSectionDeleteByUuid(uuid: String!): Any
        claimType2EAVCreate(claim_type_id: Int!, eav_object_uuid: String!, eav_object_revision_uuid: String!, override_type_id: Int): ClaimType2EAV!
        claimType2EAVUpdateById(id: Int!, claim_type_id: Int!, eav_object_uuid: String!, eav_object_revision_uuid: String!, override_type_id: Int): ClaimType2EAV!
        claimType2EAVReadDeleteById(id: Int!): Any
        claimType2NotificationTopicCreate(claim_type_id: Int!, claim_subtype_id: Int!, topic_id: Int!, notification_type_id: Int!): ClaimType2NotificationTopic!
        claimType2NotificationTopicUpdateById(id: Int!, claim_type_id: Int!, claim_subtype_id: Int!, topic_id: Int!, notification_type_id: Int!): ClaimType2NotificationTopic!
        claimType2NotificationTopicReadDeleteById(id: Int!): Any
        claimType2WorkflowCreate(type_uuid: String!, workflow_uuid: String!): ClaimType2Workflow!
        claimType2WorkflowUpdateById(id: Int!, type_uuid: String!, workflow_uuid: String!): ClaimType2Workflow!
        claimType2WorkflowReadDeleteById(id: Int!): Any
        claimType2ProductCreate(claim_type_uuid: String!, product_uuid: String!): ClaimType2Product!
        claimType2ProductUpdateById(id: Int!, claim_type_uuid: String!, product_uuid: String!): ClaimType2Product!
        claimType2ProductReadDeleteById(id: Int!): Any
        claimUser2NotificationCreate(user_id: Int!, claim_id: Int!, users2topic_id: Int!, comment: String): ClaimUser2Notification!
        claimUser2NotificationUpdateById(id: Int!, user_id: Int!, claim_id: Int!, users2topic_id: Int!, comment: String): ClaimUser2Notification!
        claimUser2NotificationReadDeleteById(id: Int!): Any
        claimUser2NotificationTopicCreate(notification_type_id: Int!, topic_id: Int!, files: [String!], date_muted_start: String, date_muted_end: String): ClaimUser2NotificationTopic!
        claimUser2NotificationTopicUpdateById(id: Int!, notification_type_id: Int!, topic_id: Int!, files: [String!], date_muted_start: String, date_muted_end: String): ClaimUser2NotificationTopic!
        claimUser2NotificationTopicReadDeleteById(id: Int!): Any
        claimUser2SubscribedClaimSettlementStatusCreateMultiple(user_id: Int!, status_ids: [Int!]!): [ClaimUser2SubscribedClaimSettlementStatus!]!
        claimUser2SubscribedClaimSettlementStatusCreate(user_id: Int!, status_id: Int!): ClaimUser2SubscribedClaimSettlementStatus!
        claimUser2SubscribedClaimSettlementStatusUpdateById(id: Int!, user_id: Int!, status_id: Int!): ClaimUser2SubscribedClaimSettlementStatus!
        claimUser2SubscribedClaimSettlementStatusDeleteById(id: Int!): Any
        claimUser2SubscribedClaimStatusCreateMultiple(user_id: Int!, status_ids: [Int!]!): [ClaimUser2SubscribedClaimStatus!]!
        claimUser2SubscribedClaimStatusCreate(user_id: Int!, status_id: Int!): ClaimUser2SubscribedClaimStatus!
        claimUser2SubscribedClaimStatusUpdateById(id: Int!, user_id: Int!, status_id: Int!): ClaimUser2SubscribedClaimStatus!
        claimUser2SubscribedClaimStatusDeleteById(id: Int!): Any
        claimWorkflowCreate(uuid: String!, logic: String!, claims_types_uuids: [String!], settlements_types_uuids: [String!]): ClaimWorkflowData!
        claimWorkflowUpdate(id: Int!, uuid: String!, logic: String!, claims_types_uuids: [String!], settlements_types_uuids: [String!]): ClaimWorkflowData!
        claimWorkflowReadDeleteById(id: Int!): Any
        claimWorkflowDeleteByUuid(uuid: String!): Any
    }
`;

module.exports = {mutations};