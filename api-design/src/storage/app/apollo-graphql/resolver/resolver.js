const {anyType} = require('./any')

const resolvers = {
    Query: {
        claimListing: async (_source, {page, limit, sortBy, desc, claimNumber, claimNumberLike, policyIdentifier, policyIdentifierLike, createdFrom, createdTo, status_uuid, type_uuid, subtype_uuid, date_of_loss, handler_user_id, handler_company_id}, {dataSources}) => {
            return dataSources.claims.claimListing(page, limit, sortBy, desc, claimNumber, claimNumberLike, policyIdentifier, policyIdentifierLike, createdFrom, createdTo, status_uuid, type_uuid, subtype_uuid, date_of_loss, handler_user_id, handler_company_id);
        },

        claimReadWithEavByUuid: async (_source, {uuid}, {dataSources}) => {
            return dataSources.claims.claimReadWithEavByUuid(uuid);
        },

        claimReadById: async (_source, {id, revision_uuid, revision}, {dataSources}) => {
            return dataSources.claims.claimReadById(id, revision_uuid, revision);
        },

        claimReadByUuid: async (_source, {uuid, revision_uuid, revision}, {dataSources}) => {
            return dataSources.claims.claimReadByUuid(uuid, revision_uuid, revision);
        },

        claimReadWithRevisionsByUuid: async (_source, {uuid}, {dataSources}) => {
            return dataSources.claims.claimReadWithRevisionsByUuid(uuid);
        },

        claimReadTransitionsById: async (_source, {id}, {dataSources}) => {
            return dataSources.claims.claimReadTransitionsById(id);
        },

        claimReadTransitionsByUuid: async (_source, {uuid}, {dataSources}) => {
            return dataSources.claims.claimReadTransitionsByUuid(uuid);
        },

        claimCommentListing: async (_source, {uuid, page, limit, sortBy, desc, showDeleted, revision_uuid, status_uuid, revision}, {dataSources}) => {
            return dataSources.claims.claimCommentListing(uuid, page, limit, sortBy, desc, showDeleted, revision_uuid, status_uuid, revision);
        },

        claimReadAllowedStatusesById: async (_source, {id}, {dataSources}) => {
            return dataSources.claims.claimReadAllowedStatusesById(id);
        },

        claim2SectionListing: async (_source, {page, limit, sortBy, desc}, {dataSources}) => {
            return dataSources.claims2Sections.claim2SectionListing(page, limit, sortBy, desc);
        },

        claim2SectionReadById: async (_source, {id}, {dataSources}) => {
            return dataSources.claims2Sections.claim2SectionReadById(id);
        },

        claimCommentReadById: async (_source, {id}, {dataSources}) => {
            return dataSources.claimsComments.claimCommentReadById(id);
        },

        claimLogListing: async (_source, {page, limit, sortBy, desc}, {dataSources}) => {
            return dataSources.claimsLogs.claimLogListing(page, limit, sortBy, desc);
        },

        claimLogReadById: async (_source, {id}, {dataSources}) => {
            return dataSources.claimsLogs.claimLogReadById(id);
        },

        claimNotificationScheduledTaskListing: async (_source, {page, limit, sortBy, desc}, {dataSources}) => {
            return dataSources.claimsNotificationsScheduledTasks.claimNotificationScheduledTaskListing(page, limit, sortBy, desc);
        },

        claimNotificationScheduledTaskReadByUuid: async (_source, {uuid}, {dataSources}) => {
            return dataSources.claimsNotificationsScheduledTasks.claimNotificationScheduledTaskReadByUuid(uuid);
        },

        claimNotificationTemplateListing: async (_source, {page, limit, sortBy, desc}, {dataSources}) => {
            return dataSources.claimsNotificationsTemplates.claimNotificationTemplateListing(page, limit, sortBy, desc);
        },

        claimNotificationTemplateReadById: async (_source, {id}, {dataSources}) => {
            return dataSources.claimsNotificationsTemplates.claimNotificationTemplateReadById(id);
        },

        claimNotificationTopicListing: async (_source, {page, limit, sortBy, desc}, {dataSources}) => {
            return dataSources.claimsNotificationsTopics.claimNotificationTopicListing(page, limit, sortBy, desc);
        },

        claimNotificationTopicReadById: async (_source, {id}, {dataSources}) => {
            return dataSources.claimsNotificationsTopics.claimNotificationTopicReadById(id);
        },

        claimNotificationTypeListing: async (_source, {page, limit, sortBy, desc}, {dataSources}) => {
            return dataSources.claimsNotificationsTypes.claimNotificationTypeListing(page, limit, sortBy, desc);
        },

        claimNotificationTypeReadById: async (_source, {id}, {dataSources}) => {
            return dataSources.claimsNotificationsTypes.claimNotificationTypeReadById(id);
        },

        claimSettlementListing: async (_source, {page, limit, sortBy, desc}, {dataSources}) => {
            return dataSources.claimsSettlements.claimSettlementListing(page, limit, sortBy, desc);
        },

        claimSettlementReadByUuid: async (_source, {uuid}, {dataSources}) => {
            return dataSources.claimsSettlements.claimSettlementReadByUuid(uuid);
        },

        claimSettlementReadTransitionsById: async (_source, {id}, {dataSources}) => {
            return dataSources.claimsSettlements.claimSettlementReadTransitionsById(id);
        },

        claimSettlementReadTransitionsByUuid: async (_source, {uuid}, {dataSources}) => {
            return dataSources.claimsSettlements.claimSettlementReadTransitionsByUuid(uuid);
        },

        claimSettlement2ClaimSettlementRecoveryListing: async (_source, {page, limit, sortBy, desc}, {dataSources}) => {
            return dataSources.claimsSettlements2ClaimsSettlementsRecoveries.claimSettlement2ClaimSettlementRecoveryListing(page, limit, sortBy, desc);
        },

        claimSettlement2ClaimSettlementRecoveryReadById: async (_source, {id}, {dataSources}) => {
            return dataSources.claimsSettlements2ClaimsSettlementsRecoveries.claimSettlement2ClaimSettlementRecoveryReadById(id);
        },

        claimSettlement2FileListing: async (_source, {page, limit, sortBy, desc}, {dataSources}) => {
            return dataSources.claimsSettlements2Files.claimSettlement2FileListing(page, limit, sortBy, desc);
        },

        claimSettlement2FileReadById: async (_source, {id}, {dataSources}) => {
            return dataSources.claimsSettlements2Files.claimSettlement2FileReadById(id);
        },

        claimSettlementLogListing: async (_source, {page, limit, sortBy, desc}, {dataSources}) => {
            return dataSources.claimsSettlementsLogs.claimSettlementLogListing(page, limit, sortBy, desc);
        },

        claimSettlementLogReadById: async (_source, {id}, {dataSources}) => {
            return dataSources.claimsSettlementsLogs.claimSettlementLogReadById(id);
        },

        claimSettlementNotificationTemplateListing: async (_source, {page, limit, sortBy, desc}, {dataSources}) => {
            return dataSources.claimsSettlementsNotificationsTemplates.claimSettlementNotificationTemplateListing(page, limit, sortBy, desc);
        },

        claimSettlementNotificationTemplateReadById: async (_source, {id}, {dataSources}) => {
            return dataSources.claimsSettlementsNotificationsTemplates.claimSettlementNotificationTemplateReadById(id);
        },

        claimSettlementPaymentTemplateListing: async (_source, {page, limit, sortBy, desc}, {dataSources}) => {
            return dataSources.claimsSettlementsPaymentsTemplates.claimSettlementPaymentTemplateListing(page, limit, sortBy, desc);
        },

        claimSettlementPaymentTemplateReadByUuid: async (_source, {uuid}, {dataSources}) => {
            return dataSources.claimsSettlementsPaymentsTemplates.claimSettlementPaymentTemplateReadByUuid(uuid);
        },

        claimSettlementRecoveryListing: async (_source, {page, limit, sortBy, desc}, {dataSources}) => {
            return dataSources.claimsSettlementsRecoveries.claimSettlementRecoveryListing(page, limit, sortBy, desc);
        },

        claimSettlementRecoveryReadByUuid: async (_source, {uuid}, {dataSources}) => {
            return dataSources.claimsSettlementsRecoveries.claimSettlementRecoveryReadByUuid(uuid);
        },

        claimSettlementRecoveryStatusListing: async (_source, {page, limit, sortBy, desc}, {dataSources}) => {
            return dataSources.claimsSettlementsRecoveriesStatuses.claimSettlementRecoveryStatusListing(page, limit, sortBy, desc);
        },

        claimSettlementRecoveryStatusReadById: async (_source, {id}, {dataSources}) => {
            return dataSources.claimsSettlementsRecoveriesStatuses.claimSettlementRecoveryStatusReadById(id);
        },

        claimSettlementRecoveryTypeListing: async (_source, {page, limit, sortBy, desc}, {dataSources}) => {
            return dataSources.claimsSettlementsRecoveriesTypes.claimSettlementRecoveryTypeListing(page, limit, sortBy, desc);
        },

        claimSettlementRecoveryTypeReadByUuid: async (_source, {uuid}, {dataSources}) => {
            return dataSources.claimsSettlementsRecoveriesTypes.claimSettlementRecoveryTypeReadByUuid(uuid);
        },

        claimSettlementStatusListing: async (_source, {page, limit, sortBy, desc}, {dataSources}) => {
            return dataSources.claimsSettlementsStatuses.claimSettlementStatusListing(page, limit, sortBy, desc);
        },

        claimSettlementStatusReadByUuid: async (_source, {uuid}, {dataSources}) => {
            return dataSources.claimsSettlementsStatuses.claimSettlementStatusReadByUuid(uuid);
        },

        claimSettlementTypeListing: async (_source, {page, limit, sortBy, desc}, {dataSources}) => {
            return dataSources.claimsSettlementsTypes.claimSettlementTypeListing(page, limit, sortBy, desc);
        },

        claimSettlementTypeReadByUuid: async (_source, {uuid}, {dataSources}) => {
            return dataSources.claimsSettlementsTypes.claimSettlementTypeReadByUuid(uuid);
        },

        claimSettlementType2NotificationTopicListing: async (_source, {page, limit, sortBy, desc}, {dataSources}) => {
            return dataSources.claimsSettlementsTypes2NotificationsTopics.claimSettlementType2NotificationTopicListing(page, limit, sortBy, desc);
        },

        claimSettlementType2NotificationTopicReadById: async (_source, {id}, {dataSources}) => {
            return dataSources.claimsSettlementsTypes2NotificationsTopics.claimSettlementType2NotificationTopicReadById(id);
        },

        claimSettlementType2WorkflowListing: async (_source, {page, limit, sortBy, desc}, {dataSources}) => {
            return dataSources.claimsSettlementsTypes2Workflows.claimSettlementType2WorkflowListing(page, limit, sortBy, desc);
        },

        claimSettlementType2WorkflowReadById: async (_source, {id}, {dataSources}) => {
            return dataSources.claimsSettlementsTypes2Workflows.claimSettlementType2WorkflowReadById(id);
        },

        claimSettlementUser2NotificationListing: async (_source, {page, limit, sortBy, desc}, {dataSources}) => {
            return dataSources.claimsSettlementsUsers2Notifications.claimSettlementUser2NotificationListing(page, limit, sortBy, desc);
        },

        claimSettlementUser2NotificationReadById: async (_source, {id}, {dataSources}) => {
            return dataSources.claimsSettlementsUsers2Notifications.claimSettlementUser2NotificationReadById(id);
        },

        claimStatusListing: async (_source, {page, limit, sortBy, desc}, {dataSources}) => {
            return dataSources.claimsStatuses.claimStatusListing(page, limit, sortBy, desc);
        },

        claimStatusReadByUuid: async (_source, {uuid}, {dataSources}) => {
            return dataSources.claimsStatuses.claimStatusReadByUuid(uuid);
        },

        claimStatus2EAVReadById: async (_source, {id}, {dataSources}) => {
            return dataSources.claimsStatuses2EAVs.claimStatus2EAVReadById(id);
        },

        claimTypeListing: async (_source, {page, limit, sortBy, desc, parent_uuid, product_uuid}, {dataSources}) => {
            return dataSources.claimsTypes.claimTypeListing(page, limit, sortBy, desc, parent_uuid, product_uuid);
        },

        claimTypeReadByUuid: async (_source, {uuid}, {dataSources}) => {
            return dataSources.claimsTypes.claimTypeReadByUuid(uuid);
        },

        claimTypeReadAllowedStatusesById: async (_source, {id}, {dataSources}) => {
            return dataSources.claimsTypes.claimTypeReadAllowedStatusesById(id);
        },

        claimTypeReadProductsByUuid: async (_source, {uuid}, {dataSources}) => {
            return dataSources.claimsTypes.claimTypeReadProductsByUuid(uuid);
        },

        claimType2DefaultValueListing: async (_source, {page, limit, sortBy, desc}, {dataSources}) => {
            return dataSources.claimsTypes2DefaultValues.claimType2DefaultValueListing(page, limit, sortBy, desc);
        },

        claimType2DefaultValueReadById: async (_source, {id}, {dataSources}) => {
            return dataSources.claimsTypes2DefaultValues.claimType2DefaultValueReadById(id);
        },

        claimType2DefaultSectionListing: async (_source, {page, limit, sortBy, desc}, {dataSources}) => {
            return dataSources.claimsTypes2DefaultSections.claimType2DefaultSectionListing(page, limit, sortBy, desc);
        },

        claimType2DefaultSectionReadByUuid: async (_source, {uuid}, {dataSources}) => {
            return dataSources.claimsTypes2DefaultSections.claimType2DefaultSectionReadByUuid(uuid);
        },

        getClaimTypeWithEAVCollection: async (_source, {}, {dataSources}) => {
            return dataSources.claimsTypes2EAVs.getClaimTypeWithEAVCollection();
        },

        claimType2EAVListing: async (_source, {page, limit, sortBy, desc, claimTypeUuids}, {dataSources}) => {
            return dataSources.claimsTypes2EAVs.claimType2EAVListing(page, limit, sortBy, desc, claimTypeUuids);
        },

        claimType2EAVReadById: async (_source, {id}, {dataSources}) => {
            return dataSources.claimsTypes2EAVs.claimType2EAVReadById(id);
        },

        claimType2NotificationTopicListing: async (_source, {page, limit, sortBy, desc}, {dataSources}) => {
            return dataSources.claimsTypes2NotificationsTopics.claimType2NotificationTopicListing(page, limit, sortBy, desc);
        },

        claimType2NotificationTopicReadById: async (_source, {id}, {dataSources}) => {
            return dataSources.claimsTypes2NotificationsTopics.claimType2NotificationTopicReadById(id);
        },

        claimType2WorkflowListing: async (_source, {page, limit, sortBy, desc}, {dataSources}) => {
            return dataSources.claimsTypes2Workflows.claimType2WorkflowListing(page, limit, sortBy, desc);
        },

        claimType2WorkflowReadById: async (_source, {id}, {dataSources}) => {
            return dataSources.claimsTypes2Workflows.claimType2WorkflowReadById(id);
        },

        claimType2ProductListing: async (_source, {page, limit, sortBy, desc}, {dataSources}) => {
            return dataSources.claimsTypes2Products.claimType2ProductListing(page, limit, sortBy, desc);
        },

        claimType2ProductReadById: async (_source, {id}, {dataSources}) => {
            return dataSources.claimsTypes2Products.claimType2ProductReadById(id);
        },

        claimUser2NotificationListing: async (_source, {page, limit, sortBy, desc}, {dataSources}) => {
            return dataSources.claimsUsers2Notifications.claimUser2NotificationListing(page, limit, sortBy, desc);
        },

        claimUser2NotificationReadById: async (_source, {id}, {dataSources}) => {
            return dataSources.claimsUsers2Notifications.claimUser2NotificationReadById(id);
        },

        claimUser2NotificationTopicListing: async (_source, {page, limit, sortBy, desc}, {dataSources}) => {
            return dataSources.claimsUsers2NotificationsTopics.claimUser2NotificationTopicListing(page, limit, sortBy, desc);
        },

        claimUser2NotificationTopicReadById: async (_source, {id}, {dataSources}) => {
            return dataSources.claimsUsers2NotificationsTopics.claimUser2NotificationTopicReadById(id);
        },

        claimUser2SubscribedClaimSettlementStatusListing: async (_source, {page, limit, sortBy, desc, user_id}, {dataSources}) => {
            return dataSources.claimsUsers2SubscribedClaimsSettlementsStatuses.claimUser2SubscribedClaimSettlementStatusListing(page, limit, sortBy, desc, user_id);
        },

        claimUser2SubscribedClaimSettlementStatusReadById: async (_source, {id}, {dataSources}) => {
            return dataSources.claimsUsers2SubscribedClaimsSettlementsStatuses.claimUser2SubscribedClaimSettlementStatusReadById(id);
        },

        claimUser2SubscribedClaimStatusListing: async (_source, {page, limit, sortBy, desc, user_id}, {dataSources}) => {
            return dataSources.claimsUsers2SubscribedClaimsStatuses.claimUser2SubscribedClaimStatusListing(page, limit, sortBy, desc, user_id);
        },

        claimUser2SubscribedClaimStatusReadById: async (_source, {id}, {dataSources}) => {
            return dataSources.claimsUsers2SubscribedClaimsStatuses.claimUser2SubscribedClaimStatusReadById(id);
        },

        claimWorkflowListing: async (_source, {page, limit, sortBy, desc}, {dataSources}) => {
            return dataSources.claimsWorkflows.claimWorkflowListing(page, limit, sortBy, desc);
        },

        claimWorkflowReadById: async (_source, {id}, {dataSources}) => {
            return dataSources.claimsWorkflows.claimWorkflowReadById(id);
        },

        claimWorkflowReadByUuid: async (_source, {uuid}, {dataSources}) => {
            return dataSources.claimsWorkflows.claimWorkflowReadByUuid(uuid);
        },

        getEAVObjectFields: async (_source, {uuid}, {dataSources}) => {
            return dataSources.eAV.getEAVObjectFields(uuid);
        },

        getEAVObjectDefinition: async (_source, {uuid}, {dataSources}) => {
            return dataSources.eAV.getEAVObjectDefinition(uuid);
        },

        getDatabasesConnected: async (_source, {}, {dataSources}) => {
            return dataSources.infoApiV1.getDatabasesConnected();
        },

        getProductStepperByUUID: async (_source, {uuid}, {dataSources}) => {
            return dataSources.productStepper.getProductStepperByUUID(uuid);
        }
    },
    Mutation: {
        claimCreate: async (_source, {policy_id, owner_id, company_id, status_id, type_id, subtype_id, custom_id, external_ref, parent_uuid}, {dataSources}) => {
            return dataSources.claims.claimCreate(policy_id, owner_id, company_id, status_id, type_id, subtype_id, custom_id, external_ref, parent_uuid);
        },

        claimUpdateByUuid: async (_source, {uuid, owner_id, status_id, type_id, subtype_id}, {dataSources}) => {
            return dataSources.claims.claimUpdateByUuid(uuid, owner_id, status_id, type_id, subtype_id);
        },

        claimDeleteByUuid: async (_source, {uuid}, {dataSources}) => {
            return dataSources.claims.claimDeleteByUuid(uuid);
        },

        claimCommentCreate: async (_source, {uuid, comment, revision}, {dataSources}) => {
            return dataSources.claimsComments.claimCommentCreate(uuid, comment, revision);
        },

        claim2SectionCreate: async (_source, {section_type_id, claim_id, revision_id, eoc_id, payee_id, apply_surplus_percentage, amount_reserved, amount_deductible, amount_loss_adjusters_fee, amount_settlement_paid}, {dataSources}) => {
            return dataSources.claims2Sections.claim2SectionCreate(section_type_id, claim_id, revision_id, eoc_id, payee_id, apply_surplus_percentage, amount_reserved, amount_deductible, amount_loss_adjusters_fee, amount_settlement_paid);
        },

        claim2SectionUpdateById: async (_source, {id, section_type_id, claim_id, revision_id, eoc_id, payee_id, apply_surplus_percentage, amount_reserved, amount_deductible, amount_loss_adjusters_fee, amount_settlement_paid}, {dataSources}) => {
            return dataSources.claims2Sections.claim2SectionUpdateById(id, section_type_id, claim_id, revision_id, eoc_id, payee_id, apply_surplus_percentage, amount_reserved, amount_deductible, amount_loss_adjusters_fee, amount_settlement_paid);
        },

        claim2SectionDeleteById: async (_source, {id}, {dataSources}) => {
            return dataSources.claims2Sections.claim2SectionDeleteById(id);
        },

        claimCommentUpdateById: async (_source, {id, comment}, {dataSources}) => {
            return dataSources.claimsComments.claimCommentUpdateById(id, comment);
        },

        claimCommentReadDeleteById: async (_source, {id}, {dataSources}) => {
            return dataSources.claimsComments.claimCommentReadDeleteById(id);
        },

        claimLogCreate: async (_source, {claim_id, user_id, log_data}, {dataSources}) => {
            return dataSources.claimsLogs.claimLogCreate(claim_id, user_id, log_data);
        },

        claimNotificationScheduledTaskCreate: async (_source, {title, schedule, logic}, {dataSources}) => {
            return dataSources.claimsNotificationsScheduledTasks.claimNotificationScheduledTaskCreate(title, schedule, logic);
        },

        claimNotificationScheduledTaskUpdateByUuid: async (_source, {uuid, title, schedule, logic}, {dataSources}) => {
            return dataSources.claimsNotificationsScheduledTasks.claimNotificationScheduledTaskUpdateByUuid(uuid, title, schedule, logic);
        },

        claimNotificationScheduledTaskDeleteByUuid: async (_source, {uuid}, {dataSources}) => {
            return dataSources.claimsNotificationsScheduledTasks.claimNotificationScheduledTaskDeleteByUuid(uuid);
        },

        claimNotificationTemplateCreate: async (_source, {title, status_id, type, template}, {dataSources}) => {
            return dataSources.claimsNotificationsTemplates.claimNotificationTemplateCreate(title, status_id, type, template);
        },

        claimNotificationTemplateUpdateById: async (_source, {id, title, status_id, type, template}, {dataSources}) => {
            return dataSources.claimsNotificationsTemplates.claimNotificationTemplateUpdateById(id, title, status_id, type, template);
        },

        claimNotificationTemplateReadDeleteById: async (_source, {id}, {dataSources}) => {
            return dataSources.claimsNotificationsTemplates.claimNotificationTemplateReadDeleteById(id);
        },

        claimNotificationTopicCreate: async (_source, {title, driver_logic}, {dataSources}) => {
            return dataSources.claimsNotificationsTopics.claimNotificationTopicCreate(title, driver_logic);
        },

        claimNotificationTopicUpdateById: async (_source, {id, title, driver_logic}, {dataSources}) => {
            return dataSources.claimsNotificationsTopics.claimNotificationTopicUpdateById(id, title, driver_logic);
        },

        claimNotificationTopicReadDeleteById: async (_source, {id}, {dataSources}) => {
            return dataSources.claimsNotificationsTopics.claimNotificationTopicReadDeleteById(id);
        },

        claimNotificationTypeCreate: async (_source, {title, duration, is_summarised}, {dataSources}) => {
            return dataSources.claimsNotificationsTypes.claimNotificationTypeCreate(title, duration, is_summarised);
        },

        claimNotificationTypeUpdateById: async (_source, {id, title, duration, is_summarised}, {dataSources}) => {
            return dataSources.claimsNotificationsTypes.claimNotificationTypeUpdateById(id, title, duration, is_summarised);
        },

        claimNotificationTypeReadDeleteById: async (_source, {id}, {dataSources}) => {
            return dataSources.claimsNotificationsTypes.claimNotificationTypeReadDeleteById(id);
        },

        claimSettlementCreate: async (_source, {claim_uuid, company_id, settlement_type_uuid, settlement_status_uuid, date_settlement_agreed, amount_settlement, date_paid, date_settlement_period_from, date_settlement_period_to, journal_id, comment, section_id}, {dataSources}) => {
            return dataSources.claimsSettlements.claimSettlementCreate(claim_uuid, company_id, settlement_type_uuid, settlement_status_uuid, date_settlement_agreed, amount_settlement, date_paid, date_settlement_period_from, date_settlement_period_to, journal_id, comment, section_id);
        },

        claimSettlementUpdateByUuid: async (_source, {uuid, claim_uuid, company_id, settlement_type_uuid, settlement_status_uuid, date_settlement_agreed, amount_settlement, date_paid, date_settlement_period_from, date_settlement_period_to, journal_id, comment, section_id}, {dataSources}) => {
            return dataSources.claimsSettlements.claimSettlementUpdateByUuid(uuid, claim_uuid, company_id, settlement_type_uuid, settlement_status_uuid, date_settlement_agreed, amount_settlement, date_paid, date_settlement_period_from, date_settlement_period_to, journal_id, comment, section_id);
        },

        claimSettlementDeleteByUuid: async (_source, {uuid}, {dataSources}) => {
            return dataSources.claimsSettlements.claimSettlementDeleteByUuid(uuid);
        },

        claimSettlement2ClaimSettlementRecoveryCreate: async (_source, {settlement_id, settlement_recovery_id, from_account_id, to_account_id, is_paid, journal_id}, {dataSources}) => {
            return dataSources.claimsSettlements2ClaimsSettlementsRecoveries.claimSettlement2ClaimSettlementRecoveryCreate(settlement_id, settlement_recovery_id, from_account_id, to_account_id, is_paid, journal_id);
        },

        claimSettlement2ClaimSettlementRecoveryUpdateById: async (_source, {id, settlement_id, settlement_recovery_id, from_account_id, to_account_id, is_paid, journal_id}, {dataSources}) => {
            return dataSources.claimsSettlements2ClaimsSettlementsRecoveries.claimSettlement2ClaimSettlementRecoveryUpdateById(id, settlement_id, settlement_recovery_id, from_account_id, to_account_id, is_paid, journal_id);
        },

        claimSettlement2ClaimSettlementRecoveryReadDeleteById: async (_source, {id}, {dataSources}) => {
            return dataSources.claimsSettlements2ClaimsSettlementsRecoveries.claimSettlement2ClaimSettlementRecoveryReadDeleteById(id);
        },

        claimSettlement2FileCreate: async (_source, {claim_settlement_id, file_name, file_mime_type, settlement_file}, {dataSources}) => {
            return dataSources.claimsSettlements2Files.claimSettlement2FileCreate(claim_settlement_id, file_name, file_mime_type, settlement_file);
        },

        claimSettlement2FileUpdateById: async (_source, {id, claim_settlement_id, file_name, file_mime_type}, {dataSources}) => {
            return dataSources.claimsSettlements2Files.claimSettlement2FileUpdateById(id, claim_settlement_id, file_name, file_mime_type);
        },

        claimSettlement2FileReadDeleteById: async (_source, {id}, {dataSources}) => {
            return dataSources.claimsSettlements2Files.claimSettlement2FileReadDeleteById(id);
        },

        claimSettlementLogCreate: async (_source, {settlement_id, user_id, log_data}, {dataSources}) => {
            return dataSources.claimsSettlementsLogs.claimSettlementLogCreate(settlement_id, user_id, log_data);
        },

        claimSettlementNotificationTemplateCreate: async (_source, {title, status_id, type, template}, {dataSources}) => {
            return dataSources.claimsSettlementsNotificationsTemplates.claimSettlementNotificationTemplateCreate(title, status_id, type, template);
        },

        claimSettlementNotificationTemplateUpdateById: async (_source, {id, title, status_id, type, template}, {dataSources}) => {
            return dataSources.claimsSettlementsNotificationsTemplates.claimSettlementNotificationTemplateUpdateById(id, title, status_id, type, template);
        },

        claimSettlementNotificationTemplateReadDeleteById: async (_source, {id}, {dataSources}) => {
            return dataSources.claimsSettlementsNotificationsTemplates.claimSettlementNotificationTemplateReadDeleteById(id);
        },

        claimSettlementPaymentTemplateCreate: async (_source, {title, template}, {dataSources}) => {
            return dataSources.claimsSettlementsPaymentsTemplates.claimSettlementPaymentTemplateCreate(title, template);
        },

        claimSettlementPaymentTemplateUpdateByUuid: async (_source, {uuid, title, template}, {dataSources}) => {
            return dataSources.claimsSettlementsPaymentsTemplates.claimSettlementPaymentTemplateUpdateByUuid(uuid, title, template);
        },

        claimSettlementPaymentTemplateDeleteByUuid: async (_source, {uuid}, {dataSources}) => {
            return dataSources.claimsSettlementsPaymentsTemplates.claimSettlementPaymentTemplateDeleteByUuid(uuid);
        },

        claimSettlementRecoveryCreate: async (_source, {company_id, journal_id, settlement_rec_status_id, settlement_rec_type_id, amount_settlement_recovery, comments, date_range_begin, date_range_end, date_transactions, finalised_at}, {dataSources}) => {
            return dataSources.claimsSettlementsRecoveries.claimSettlementRecoveryCreate(company_id, journal_id, settlement_rec_status_id, settlement_rec_type_id, amount_settlement_recovery, comments, date_range_begin, date_range_end, date_transactions, finalised_at);
        },

        claimSettlementRecoveryUpdateByUuid: async (_source, {uuid, company_id, journal_id, settlement_rec_status_id, settlement_rec_type_id, amount_settlement_recovery, comments, date_range_begin, date_range_end, date_transactions, finalised_at}, {dataSources}) => {
            return dataSources.claimsSettlementsRecoveries.claimSettlementRecoveryUpdateByUuid(uuid, company_id, journal_id, settlement_rec_status_id, settlement_rec_type_id, amount_settlement_recovery, comments, date_range_begin, date_range_end, date_transactions, finalised_at);
        },

        claimSettlementRecoveryDeleteByUuid: async (_source, {uuid}, {dataSources}) => {
            return dataSources.claimsSettlementsRecoveries.claimSettlementRecoveryDeleteByUuid(uuid);
        },

        claimSettlementRecoverySetSettlements: async (_source, {settlement_ids, from_account_id, to_account_id, is_paid, journal_id}, {dataSources}) => {
            return dataSources.claimsSettlementsRecoveries.claimSettlementRecoverySetSettlements(settlement_ids, from_account_id, to_account_id, is_paid, journal_id);
        },

        claimSettlementRecoveryStatusCreate: async (_source, {title}, {dataSources}) => {
            return dataSources.claimsSettlementsRecoveriesStatuses.claimSettlementRecoveryStatusCreate(title);
        },

        claimSettlementRecoveryStatusUpdateByUuid: async (_source, {uuid, title}, {dataSources}) => {
            return dataSources.claimsSettlementsRecoveriesStatuses.claimSettlementRecoveryStatusUpdateByUuid(uuid, title);
        },

        claimSettlementRecoveryStatusDeleteByUuid: async (_source, {id}, {dataSources}) => {
            return dataSources.claimsSettlementsRecoveriesStatuses.claimSettlementRecoveryStatusDeleteByUuid(id);
        },

        claimSettlementRecoveryTypeCreate: async (_source, {title, accounting_workflow_uuid, section_id}, {dataSources}) => {
            return dataSources.claimsSettlementsRecoveriesTypes.claimSettlementRecoveryTypeCreate(title, accounting_workflow_uuid, section_id);
        },

        claimSettlementRecoveryTypeUpdateByUuid: async (_source, {uuid, title, accounting_workflow_uuid, section_id}, {dataSources}) => {
            return dataSources.claimsSettlementsRecoveriesTypes.claimSettlementRecoveryTypeUpdateByUuid(uuid, title, accounting_workflow_uuid, section_id);
        },

        claimSettlementRecoveryTypeDeleteByUuid: async (_source, {uuid}, {dataSources}) => {
            return dataSources.claimsSettlementsRecoveriesTypes.claimSettlementRecoveryTypeDeleteByUuid(uuid);
        },

        claimSettlementStatusCreate: async (_source, {title}, {dataSources}) => {
            return dataSources.claimsSettlementsStatuses.claimSettlementStatusCreate(title);
        },

        claimSettlementStatusUpdateByUuid: async (_source, {uuid, title}, {dataSources}) => {
            return dataSources.claimsSettlementsStatuses.claimSettlementStatusUpdateByUuid(uuid, title);
        },

        claimSettlementStatusDeleteByUuid: async (_source, {uuid}, {dataSources}) => {
            return dataSources.claimsSettlementsStatuses.claimSettlementStatusDeleteByUuid(uuid);
        },

        claimSettlementTypeCreate: async (_source, {title, parent_uuid, accounting_workflow_uuid}, {dataSources}) => {
            return dataSources.claimsSettlementsTypes.claimSettlementTypeCreate(title, parent_uuid, accounting_workflow_uuid);
        },

        claimSettlementTypeUpdateByUuid: async (_source, {uuid, title, parent_uuid, accounting_workflow_uuid}, {dataSources}) => {
            return dataSources.claimsSettlementsTypes.claimSettlementTypeUpdateByUuid(uuid, title, parent_uuid, accounting_workflow_uuid);
        },

        claimSettlementTypeDeleteByUuid: async (_source, {uuid}, {dataSources}) => {
            return dataSources.claimsSettlementsTypes.claimSettlementTypeDeleteByUuid(uuid);
        },

        claimSettlementType2NotificationTopicCreate: async (_source, {settlement_type_id, topic_id, notification_type_id}, {dataSources}) => {
            return dataSources.claimsSettlementsTypes2NotificationsTopics.claimSettlementType2NotificationTopicCreate(settlement_type_id, topic_id, notification_type_id);
        },

        claimSettlementType2NotificationTopicUpdateById: async (_source, {id, settlement_type_id, topic_id, notification_type_id}, {dataSources}) => {
            return dataSources.claimsSettlementsTypes2NotificationsTopics.claimSettlementType2NotificationTopicUpdateById(id, settlement_type_id, topic_id, notification_type_id);
        },

        claimSettlementType2NotificationTopicReadDeleteById: async (_source, {id}, {dataSources}) => {
            return dataSources.claimsSettlementsTypes2NotificationsTopics.claimSettlementType2NotificationTopicReadDeleteById(id);
        },

        claimSettlementType2WorkflowCreate: async (_source, {settlement_type_uuid, workflow_uuid}, {dataSources}) => {
            return dataSources.claimsSettlementsTypes2Workflows.claimSettlementType2WorkflowCreate(settlement_type_uuid, workflow_uuid);
        },

        claimSettlementType2WorkflowUpdateById: async (_source, {id, settlement_type_uuid, workflow_uuid}, {dataSources}) => {
            return dataSources.claimsSettlementsTypes2Workflows.claimSettlementType2WorkflowUpdateById(id, settlement_type_uuid, workflow_uuid);
        },

        claimSettlementType2WorkflowReadDeleteById: async (_source, {id}, {dataSources}) => {
            return dataSources.claimsSettlementsTypes2Workflows.claimSettlementType2WorkflowReadDeleteById(id);
        },

        claimSettlementUser2NotificationCreate: async (_source, {user_id, settlement_id, users2topic_id, comment}, {dataSources}) => {
            return dataSources.claimsSettlementsUsers2Notifications.claimSettlementUser2NotificationCreate(user_id, settlement_id, users2topic_id, comment);
        },

        claimSettlementUser2NotificationUpdateById: async (_source, {id, user_id, settlement_id, users2topic_id, comment}, {dataSources}) => {
            return dataSources.claimsSettlementsUsers2Notifications.claimSettlementUser2NotificationUpdateById(id, user_id, settlement_id, users2topic_id, comment);
        },

        claimSettlementUser2NotificationReadDeleteById: async (_source, {id}, {dataSources}) => {
            return dataSources.claimsSettlementsUsers2Notifications.claimSettlementUser2NotificationReadDeleteById(id);
        },

        claimStatusCreate: async (_source, {title}, {dataSources}) => {
            return dataSources.claimsStatuses.claimStatusCreate(title);
        },

        claimStatusUpdateByUuid: async (_source, {uuid, title}, {dataSources}) => {
            return dataSources.claimsStatuses.claimStatusUpdateByUuid(uuid, title);
        },

        claimStatusDeleteByUuid: async (_source, {uuid}, {dataSources}) => {
            return dataSources.claimsStatuses.claimStatusDeleteByUuid(uuid);
        },

        claimStatus2EAVListing: async (_source, {page, limit, sortBy, desc, status_uuid}, {dataSources}) => {
            return dataSources.claimsStatuses2EAVs.claimStatus2EAVListing(page, limit, sortBy, desc, status_uuid);
        },

        claimStatus2EAVCreate: async (_source, {status_uuid, eav_object_uuid, eav_object_revision_uuid}, {dataSources}) => {
            return dataSources.claimsStatuses2EAVs.claimStatus2EAVCreate(status_uuid, eav_object_uuid, eav_object_revision_uuid);
        },

        claimStatus2EAVUpdateById: async (_source, {id, status_uuid, eav_object_uuid, eav_object_revision_uuid}, {dataSources}) => {
            return dataSources.claimsStatuses2EAVs.claimStatus2EAVUpdateById(id, status_uuid, eav_object_uuid, eav_object_revision_uuid);
        },

        claimStatus2EAVDeleteById: async (_source, {id}, {dataSources}) => {
            return dataSources.claimsStatuses2EAVs.claimStatus2EAVDeleteById(id);
        },

        claimTypeCreate: async (_source, {title, parent_uuid, amount_deductible_default, amount_loss_adjusters_fee_default, amount_reserve_default}, {dataSources}) => {
            return dataSources.claimsTypes.claimTypeCreate(title, parent_uuid, amount_deductible_default, amount_loss_adjusters_fee_default, amount_reserve_default);
        },

        claimTypeUpdateByUuid: async (_source, {uuid, title, parent_uuid, amount_deductible_default, amount_loss_adjusters_fee_default, amount_reserve_default}, {dataSources}) => {
            return dataSources.claimsTypes.claimTypeUpdateByUuid(uuid, title, parent_uuid, amount_deductible_default, amount_loss_adjusters_fee_default, amount_reserve_default);
        },

        claimTypeDeleteByUuid: async (_source, {uuid}, {dataSources}) => {
            return dataSources.claimsTypes.claimTypeDeleteByUuid(uuid);
        },

        claimType2DefaultValueCreate: async (_source, {claim_type_uuid, product_uuid, section_uuids, amount_default_reserve, amount_default_deductible, amount_default_loss_adjusters_fee, date_effective}, {dataSources}) => {
            return dataSources.claimsTypes2DefaultValues.claimType2DefaultValueCreate(claim_type_uuid, product_uuid, section_uuids, amount_default_reserve, amount_default_deductible, amount_default_loss_adjusters_fee, date_effective);
        },

        claimType2DefaultValueUpdateById: async (_source, {id, claim_type_uuid, product_uuid, section_uuids, amount_default_reserve, amount_default_deductible, amount_default_loss_adjusters_fee, date_effective}, {dataSources}) => {
            return dataSources.claimsTypes2DefaultValues.claimType2DefaultValueUpdateById(id, claim_type_uuid, product_uuid, section_uuids, amount_default_reserve, amount_default_deductible, amount_default_loss_adjusters_fee, date_effective);
        },

        claimType2DefaultValueReadDeleteById: async (_source, {id}, {dataSources}) => {
            return dataSources.claimsTypes2DefaultValues.claimType2DefaultValueReadDeleteById(id);
        },

        claimType2DefaultSectionCreate: async (_source, {claim_type_uuid, title, payee_id, date_effective}, {dataSources}) => {
            return dataSources.claimsTypes2DefaultSections.claimType2DefaultSectionCreate(claim_type_uuid, title, payee_id, date_effective);
        },

        claimType2DefaultSectionUpdateByUuid: async (_source, {uuid, claim_type_uuid, title, payee_id, date_effective}, {dataSources}) => {
            return dataSources.claimsTypes2DefaultSections.claimType2DefaultSectionUpdateByUuid(uuid, claim_type_uuid, title, payee_id, date_effective);
        },

        claimType2DefaultSectionDeleteByUuid: async (_source, {uuid}, {dataSources}) => {
            return dataSources.claimsTypes2DefaultSections.claimType2DefaultSectionDeleteByUuid(uuid);
        },

        claimType2EAVCreate: async (_source, {claim_type_id, eav_object_uuid, eav_object_revision_uuid, override_type_id}, {dataSources}) => {
            return dataSources.claimsTypes2EAVs.claimType2EAVCreate(claim_type_id, eav_object_uuid, eav_object_revision_uuid, override_type_id);
        },

        claimType2EAVUpdateById: async (_source, {id, claim_type_id, eav_object_uuid, eav_object_revision_uuid, override_type_id}, {dataSources}) => {
            return dataSources.claimsTypes2EAVs.claimType2EAVUpdateById(id, claim_type_id, eav_object_uuid, eav_object_revision_uuid, override_type_id);
        },

        claimType2EAVReadDeleteById: async (_source, {id}, {dataSources}) => {
            return dataSources.claimsTypes2EAVs.claimType2EAVReadDeleteById(id);
        },

        claimType2NotificationTopicCreate: async (_source, {claim_type_id, claim_subtype_id, topic_id, notification_type_id}, {dataSources}) => {
            return dataSources.claimsTypes2NotificationsTopics.claimType2NotificationTopicCreate(claim_type_id, claim_subtype_id, topic_id, notification_type_id);
        },

        claimType2NotificationTopicUpdateById: async (_source, {id, claim_type_id, claim_subtype_id, topic_id, notification_type_id}, {dataSources}) => {
            return dataSources.claimsTypes2NotificationsTopics.claimType2NotificationTopicUpdateById(id, claim_type_id, claim_subtype_id, topic_id, notification_type_id);
        },

        claimType2NotificationTopicReadDeleteById: async (_source, {id}, {dataSources}) => {
            return dataSources.claimsTypes2NotificationsTopics.claimType2NotificationTopicReadDeleteById(id);
        },

        claimType2WorkflowCreate: async (_source, {type_uuid, workflow_uuid}, {dataSources}) => {
            return dataSources.claimsTypes2Workflows.claimType2WorkflowCreate(type_uuid, workflow_uuid);
        },

        claimType2WorkflowUpdateById: async (_source, {id, type_uuid, workflow_uuid}, {dataSources}) => {
            return dataSources.claimsTypes2Workflows.claimType2WorkflowUpdateById(id, type_uuid, workflow_uuid);
        },

        claimType2WorkflowReadDeleteById: async (_source, {id}, {dataSources}) => {
            return dataSources.claimsTypes2Workflows.claimType2WorkflowReadDeleteById(id);
        },

        claimType2ProductCreate: async (_source, {claim_type_uuid, product_uuid}, {dataSources}) => {
            return dataSources.claimsTypes2Products.claimType2ProductCreate(claim_type_uuid, product_uuid);
        },

        claimType2ProductUpdateById: async (_source, {id, claim_type_uuid, product_uuid}, {dataSources}) => {
            return dataSources.claimsTypes2Products.claimType2ProductUpdateById(id, claim_type_uuid, product_uuid);
        },

        claimType2ProductReadDeleteById: async (_source, {id}, {dataSources}) => {
            return dataSources.claimsTypes2Products.claimType2ProductReadDeleteById(id);
        },

        claimUser2NotificationCreate: async (_source, {user_id, claim_id, users2topic_id, comment}, {dataSources}) => {
            return dataSources.claimsUsers2Notifications.claimUser2NotificationCreate(user_id, claim_id, users2topic_id, comment);
        },

        claimUser2NotificationUpdateById: async (_source, {id, user_id, claim_id, users2topic_id, comment}, {dataSources}) => {
            return dataSources.claimsUsers2Notifications.claimUser2NotificationUpdateById(id, user_id, claim_id, users2topic_id, comment);
        },

        claimUser2NotificationReadDeleteById: async (_source, {id}, {dataSources}) => {
            return dataSources.claimsUsers2Notifications.claimUser2NotificationReadDeleteById(id);
        },

        claimUser2NotificationTopicCreate: async (_source, {notification_type_id, topic_id, files, date_muted_start, date_muted_end}, {dataSources}) => {
            return dataSources.claimsUsers2NotificationsTopics.claimUser2NotificationTopicCreate(notification_type_id, topic_id, files, date_muted_start, date_muted_end);
        },

        claimUser2NotificationTopicUpdateById: async (_source, {id, notification_type_id, topic_id, files, date_muted_start, date_muted_end}, {dataSources}) => {
            return dataSources.claimsUsers2NotificationsTopics.claimUser2NotificationTopicUpdateById(id, notification_type_id, topic_id, files, date_muted_start, date_muted_end);
        },

        claimUser2NotificationTopicReadDeleteById: async (_source, {id}, {dataSources}) => {
            return dataSources.claimsUsers2NotificationsTopics.claimUser2NotificationTopicReadDeleteById(id);
        },

        claimUser2SubscribedClaimSettlementStatusCreateMultiple: async (_source, {user_id, status_ids}, {dataSources}) => {
            return dataSources.claimsUsers2SubscribedClaimsSettlementsStatuses.claimUser2SubscribedClaimSettlementStatusCreateMultiple(user_id, status_ids);
        },

        claimUser2SubscribedClaimSettlementStatusCreate: async (_source, {user_id, status_id}, {dataSources}) => {
            return dataSources.claimsUsers2SubscribedClaimsSettlementsStatuses.claimUser2SubscribedClaimSettlementStatusCreate(user_id, status_id);
        },

        claimUser2SubscribedClaimSettlementStatusUpdateById: async (_source, {id, user_id, status_id}, {dataSources}) => {
            return dataSources.claimsUsers2SubscribedClaimsSettlementsStatuses.claimUser2SubscribedClaimSettlementStatusUpdateById(id, user_id, status_id);
        },

        claimUser2SubscribedClaimSettlementStatusDeleteById: async (_source, {id}, {dataSources}) => {
            return dataSources.claimsUsers2SubscribedClaimsSettlementsStatuses.claimUser2SubscribedClaimSettlementStatusDeleteById(id);
        },

        claimUser2SubscribedClaimStatusCreateMultiple: async (_source, {user_id, status_ids}, {dataSources}) => {
            return dataSources.claimsUsers2SubscribedClaimsStatuses.claimUser2SubscribedClaimStatusCreateMultiple(user_id, status_ids);
        },

        claimUser2SubscribedClaimStatusCreate: async (_source, {user_id, status_id}, {dataSources}) => {
            return dataSources.claimsUsers2SubscribedClaimsStatuses.claimUser2SubscribedClaimStatusCreate(user_id, status_id);
        },

        claimUser2SubscribedClaimStatusUpdateById: async (_source, {id, user_id, status_id}, {dataSources}) => {
            return dataSources.claimsUsers2SubscribedClaimsStatuses.claimUser2SubscribedClaimStatusUpdateById(id, user_id, status_id);
        },

        claimUser2SubscribedClaimStatusDeleteById: async (_source, {id}, {dataSources}) => {
            return dataSources.claimsUsers2SubscribedClaimsStatuses.claimUser2SubscribedClaimStatusDeleteById(id);
        },

        claimWorkflowCreate: async (_source, {uuid, logic, claims_types_uuids, settlements_types_uuids}, {dataSources}) => {
            return dataSources.claimsWorkflows.claimWorkflowCreate(uuid, logic, claims_types_uuids, settlements_types_uuids);
        },

        claimWorkflowUpdate: async (_source, {id, uuid, logic, claims_types_uuids, settlements_types_uuids}, {dataSources}) => {
            return dataSources.claimsWorkflows.claimWorkflowUpdate(id, uuid, logic, claims_types_uuids, settlements_types_uuids);
        },

        claimWorkflowReadDeleteById: async (_source, {id}, {dataSources}) => {
            return dataSources.claimsWorkflows.claimWorkflowReadDeleteById(id);
        },

        claimWorkflowDeleteByUuid: async (_source, {uuid}, {dataSources}) => {
            return dataSources.claimsWorkflows.claimWorkflowDeleteByUuid(uuid);
        }
    },
    Any: anyType
};

module.exports = {resolvers};