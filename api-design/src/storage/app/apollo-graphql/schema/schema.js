const schema = `
    scalar Any

    type Link {
        url: String
        label: String!
        active: Boolean!
    }

    type Claim {
        id: Int!
        uuid: String!
        policy_id: Int!
        revision: Int!
        parent_uuid: String
        custom_id: String
        external_ref: String
        company_id: Int
        created_at: String
        updated_at: String
        deleted_at: String
    }

    type RevisionData {
        id: Int!
        uuid: String!
        claim_id: Int!
        revision: Int!
        owner_id: Int!
        status_id: Int!
        status_eav_object_id: Int!
        status_eav_object_revision_id: Int!
        status_eav_object_instance_id: Int!
        status_eav_object_instance_revision_id: Int!
        type_id: Int!
        subtype_id: Int!
        eav_object_id: Int!
        eav_object_revision_id: Int!
        eav_object_instance_id: Int!
        eav_object_instance_revision_id: Int!
        handler_company_id: Int!
        handler_user_id: Int!
        payee_id: Int!
        loss_adjuster_company_id: Int!
        loss_adjuster_user_id: Int!
        date_of_loss: String!
        date_adjuster_instructed: String!
        date_claim_concluded: String!
        amount_deductible: Float!
        amount_loss_adjusters_fee: Float!
        amount_reserved: Float!
        amount_settlement_paid: Float!
        amount_claim_reserved: Float!
        amount_claim_final: Float!
        status_uuid: String!
        type_uuid: String!
        subtype_uuid: String!
        created_at: String
        updated_at: String
        deleted_at: String
    }

    type TrackerStateRevision {
        id: Int!
        revision: Int!
        created_at: String
    }

    type ClaimStatus {
        id: Int!
        uuid: String!
        title: String!
        created_at: String
        updated_at: String
        deleted_at: String
    }

    type TrackerState {
        revisions: [TrackerStateRevision!]!
        status: ClaimStatus!
    }

    type Tracker {
        states: [TrackerState!]!
    }

    type ClaimAndRevisionsData {
        claim_data: Claim!
        revision_data: RevisionData!
        tracker: Tracker!
        revisions_data: [RevisionData!]!
    }

    type ClaimListingPaginated {
        data: [ClaimAndRevisionsData!]!
        links: [Link!]!
        current_page: Int!
        first_page_url: String!
        from: Int
        to: Int
        total: Int!
        per_page: Int!
        last_page: Int!
        last_page_url: String!
        next_page_url: String
        prev_page_url: String
        path: String
    }

    type Revision {
        id: Int!
        uuid: String!
        claim_id: Int!
        revision: Int!
        owner_id: Int!
        status_id: Int!
        status_eav_object_id: Int!
        status_eav_object_revision_id: Int!
        status_eav_object_instance_id: Int!
        status_eav_object_instance_revision_id: Int!
        type_id: Int!
        subtype_id: Int!
        eav_object_id: Int!
        eav_object_revision_id: Int!
        eav_object_instance_id: Int!
        eav_object_instance_revision_id: Int!
        handler_company_id: Int!
        handler_user_id: Int!
        payee_id: Int!
        loss_adjuster_company_id: Int!
        loss_adjuster_user_id: Int!
        date_of_loss: String!
        date_adjuster_instructed: String!
        date_claim_concluded: String!
        amount_deductible: Float!
        amount_loss_adjusters_fee: Float!
        amount_reserved: Float!
        amount_settlement_paid: Float!
        amount_claim_reserved: Float!
        amount_claim_final: Float!
        created_at: String
        updated_at: String
        deleted_at: String
    }

    type ClaimAndRevision {
        claim: Claim!
        revision: Revision!
    }

    type FilesData {
        is_muted: Int!
        file_name: String!
        file_renamed: String!
        file_path: String!
        file_type: String!
        file_size: Int!
        created_at: String
    }

    type ClaimData {
        policy_id: Int!
        external_ref: String
        company_id: Int
        owner_id: Int!
        status_id: Int!
        type_id: Int!
        subtype_id: Int!
        handler_company_id: Int!
        handler_user_id: Int!
        payee_id: Int!
        loss_adjuster_company_id: Int!
        loss_adjuster_user_id: Int!
        date_of_loss: String!
        date_adjuster_instructed: String!
        date_claim_concluded: String!
        amount_deductible: Float!
        amount_loss_adjusters_fee: Float!
        amount_reserved: Float!
        amount_settlement_paid: Float!
        amount_claim_reserved: Float!
        amount_claim_final: Float!
    }

    type Section {
        section_type_id: Int!
        claim_id: Int!
        revision_id: Int!
        eoc_id: Int!
        payee_id: Int!
        apply_surplus_percentage: Int!
        amount_reserved: Float!
        amount_deductible: Float
        amount_loss_adjusters_fee: Float
        amount_settlement_paid: Float
    }

    type Financials {
        sections: [Section!]!
        amount_deductible: Float!
        amount_loss_adjusters_fee: Float!
        amount_reserved: Float!
    }

    type ClaimWithEAV {
        files: [FilesData!]!
        claim: ClaimData!
        financials: Financials!
        eav: Any!
    }

    type ClaimAndRevisionData {
        claim_data: Claim!
        revision_data: RevisionData!
    }

    type State {
        metadata: Any!
        id: Int!
        name: String!
        uuid: String
        initial: Boolean!
    }

    type Transition {
        startState: State
        endState: State!
        preTransitionHandlerClass: String
        postTransitionHandlerClass: String
    }

    type Group {
        transitions: [Transition!]!
        id: Int!
        name: String!
        priority: Int!
        uuid: String
    }

    type WorkflowTransition {
        groups: [Group!]!
        workflow_uuid: String!
    }

    type Transitions {
        transitions: [WorkflowTransition!]!
    }

    type ClaimComment {
        id: Int!
        user_id: Int!
        claim_revision_id: Int!
        revision: Int!
        comment: String!
        claim_uuid: String!
        claims_revision_uuid: String!
        claims_status_uuid: String!
        claims_status_title: String!
        created_at: String
        updated_at: String
        deleted_at: String
    }

    type ClaimCommentListingPaginated {
        data: [ClaimComment!]!
        links: [Link!]!
        current_page: Int!
        first_page_url: String!
        from: Int
        to: Int
        total: Int!
        per_page: Int!
        last_page: Int!
        last_page_url: String!
        next_page_url: String
        prev_page_url: String
        path: String
    }

    type Claim2Section {
        id: Int!
        section_type_id: Int!
        claim_id: Int!
        revision_id: Int!
        eoc_id: Int!
        payee_id: Int!
        apply_surplus_percentage: Int!
        amount_reserved: Float!
        amount_deductible: Float
        amount_loss_adjusters_fee: Float
        amount_settlement_paid: Float
        created_at: String
        updated_at: String
    }

    type Claim2SectionListingPaginated {
        data: [Claim2Section!]!
        links: [Link!]!
        current_page: Int!
        first_page_url: String!
        from: Int
        to: Int
        total: Int!
        per_page: Int!
        last_page: Int!
        last_page_url: String!
        next_page_url: String
        prev_page_url: String
        path: String
    }

    type ClaimLog {
        log_data: Any!
        id: Int!
        claim_id: Int!
        user_id: Int!
        created_at: String
        updated_at: String
        deleted_at: String
    }

    type ClaimLogListingPaginated {
        data: [ClaimLog!]!
        links: [Link!]!
        current_page: Int!
        first_page_url: String!
        from: Int
        to: Int
        total: Int!
        per_page: Int!
        last_page: Int!
        last_page_url: String!
        next_page_url: String
        prev_page_url: String
        path: String
    }

    type ClaimNotificationScheduledTask {
        logic: Any!
        id: Int!
        uuid: String!
        title: String!
        schedule: String!
        created_at: String
        updated_at: String
        deleted_at: String
    }

    type ClaimNotificationScheduledTaskListingPaginated {
        data: [ClaimNotificationScheduledTask!]!
        links: [Link!]!
        current_page: Int!
        first_page_url: String!
        from: Int
        to: Int
        total: Int!
        per_page: Int!
        last_page: Int!
        last_page_url: String!
        next_page_url: String
        prev_page_url: String
        path: String
    }

    type ClaimNotificationTemplate {
        template: Any!
        id: Int!
        title: String!
        status_id: Int!
        type: String!
        created_at: String
        updated_at: String
        deleted_at: String
    }

    type ClaimNotificationTemplateListingPaginated {
        data: [ClaimNotificationTemplate!]!
        links: [Link!]!
        current_page: Int!
        first_page_url: String!
        from: Int
        to: Int
        total: Int!
        per_page: Int!
        last_page: Int!
        last_page_url: String!
        next_page_url: String
        prev_page_url: String
        path: String
    }

    type ClaimNotificationTopic {
        driver_logic: Any!
        id: Int!
        title: String!
        created_at: String
        updated_at: String
        deleted_at: String
    }

    type ClaimNotificationTopicListingPaginated {
        data: [ClaimNotificationTopic!]!
        links: [Link!]!
        current_page: Int!
        first_page_url: String!
        from: Int
        to: Int
        total: Int!
        per_page: Int!
        last_page: Int!
        last_page_url: String!
        next_page_url: String
        prev_page_url: String
        path: String
    }

    type ClaimNotificationType {
        duration: Any!
        id: Int!
        title: String!
        is_summarised: Boolean!
        created_at: String
        updated_at: String
        deleted_at: String
    }

    type ClaimNotificationTypeListingPaginated {
        data: [ClaimNotificationType!]!
        links: [Link!]!
        current_page: Int!
        first_page_url: String!
        from: Int
        to: Int
        total: Int!
        per_page: Int!
        last_page: Int!
        last_page_url: String!
        next_page_url: String
        prev_page_url: String
        path: String
    }

    type ClaimSettlement {
        id: Int!
        uuid: String!
        claim_id: Int!
        company_id: Int!
        policy_id: Int!
        settlement_type_id: Int!
        settlement_status_id: Int!
        date_settlement_agreed: String!
        amount_settlement: Float!
        amount_deductible: Float!
        amount_paid: Float!
        claim_uuid: String!
        settlement_type_uuid: String!
        settlement_status_uuid: String!
        journal_id: Int
        section_id: Int
        comment: String
        date_paid: String
        date_settlement_period_from: String
        date_settlement_period_to: String
        created_at: String
        updated_at: String
        deleted_at: String
    }

    type ClaimSettlementListingPaginated {
        data: [ClaimSettlement!]!
        links: [Link!]!
        current_page: Int!
        first_page_url: String!
        from: Int
        to: Int
        total: Int!
        per_page: Int!
        last_page: Int!
        last_page_url: String!
        next_page_url: String
        prev_page_url: String
        path: String
    }

    type ClaimSettlement2ClaimSettlementRecovery {
        id: Int!
        settlement_id: Int!
        settlement_recovery_id: Int!
        is_paid: Boolean!
        journal_id: Int
        from_account_id: Int!
        to_account_id: Int!
        created_at: String
        updated_at: String
    }

    type ClaimSettlement2ClaimSettlementRecoveryListingPaginated {
        data: [ClaimSettlement2ClaimSettlementRecovery!]!
        links: [Link!]!
        current_page: Int!
        first_page_url: String!
        from: Int
        to: Int
        total: Int!
        per_page: Int!
        last_page: Int!
        last_page_url: String!
        next_page_url: String
        prev_page_url: String
        path: String
    }

    type ClaimSettlement2File {
        id: Int!
        user_id: Int!
        claim_settlement_id: Int!
        file_path: String!
        file_mime_type: String!
        file_name: String!
        created_at: String
        updated_at: String
        deleted_at: String
    }

    type ClaimSettlement2FileListingPaginated {
        data: [ClaimSettlement2File!]!
        links: [Link!]!
        current_page: Int!
        first_page_url: String!
        from: Int
        to: Int
        total: Int!
        per_page: Int!
        last_page: Int!
        last_page_url: String!
        next_page_url: String
        prev_page_url: String
        path: String
    }

    type ClaimSettlementLog {
        log_data: Any!
        id: Int!
        settlement_id: Int!
        user_id: Int!
        created_at: String
        updated_at: String
        deleted_at: String
    }

    type ClaimSettlementLogListingPaginated {
        data: [ClaimSettlementLog!]!
        links: [Link!]!
        current_page: Int!
        first_page_url: String!
        from: Int
        to: Int
        total: Int!
        per_page: Int!
        last_page: Int!
        last_page_url: String!
        next_page_url: String
        prev_page_url: String
        path: String
    }

    type ClaimSettlementNotificationTemplate {
        template: Any!
        id: Int!
        title: String!
        status_id: Int!
        type: String!
        created_at: String
        updated_at: String
        deleted_at: String
    }

    type ClaimSettlementNotificationTemplateListingPaginated {
        data: [ClaimSettlementNotificationTemplate!]!
        links: [Link!]!
        current_page: Int!
        first_page_url: String!
        from: Int
        to: Int
        total: Int!
        per_page: Int!
        last_page: Int!
        last_page_url: String!
        next_page_url: String
        prev_page_url: String
        path: String
    }

    type ClaimSettlementPaymentTemplate {
        id: Int!
        uuid: String!
        title: String!
        template: String!
        created_at: String
        updated_at: String
        deleted_at: String
    }

    type ClaimSettlementPaymentTemplateListingPaginated {
        data: [ClaimSettlementPaymentTemplate!]!
        links: [Link!]!
        current_page: Int!
        first_page_url: String!
        from: Int
        to: Int
        total: Int!
        per_page: Int!
        last_page: Int!
        last_page_url: String!
        next_page_url: String
        prev_page_url: String
        path: String
    }

    type ClaimSettlementRecovery {
        id: Int!
        uuid: String!
        company_id: Int!
        journal_id: Int
        settlement_rec_type_id: Int!
        settlement_rec_status_id: Int!
        amount_settlement_recovery: Float!
        comments: String
        date_range_begin: String!
        date_range_end: String!
        date_transactions: String
        finalised_at: String
        created_at: String
        updated_at: String
        deleted_at: String
    }

    type ClaimSettlementRecoveryListingPaginated {
        data: [ClaimSettlementRecovery!]!
        links: [Link!]!
        current_page: Int!
        first_page_url: String!
        from: Int
        to: Int
        total: Int!
        per_page: Int!
        last_page: Int!
        last_page_url: String!
        next_page_url: String
        prev_page_url: String
        path: String
    }

    type ClaimSettlementRecoveryStatus {
        id: Int!
        title: String!
        created_at: String
        updated_at: String
        deleted_at: String
    }

    type ClaimSettlementRecoveryStatusListingPaginated {
        data: [ClaimSettlementRecoveryStatus!]!
        links: [Link!]!
        current_page: Int!
        first_page_url: String!
        from: Int
        to: Int
        total: Int!
        per_page: Int!
        last_page: Int!
        last_page_url: String!
        next_page_url: String
        prev_page_url: String
        path: String
    }

    type ClaimSettlementRecoveryType {
        id: Int!
        uuid: String!
        title: String!
        accounting_workflow_uuid: String!
        section_id: Int
        created_at: String
        updated_at: String
        deleted_at: String
    }

    type ClaimSettlementRecoveryTypeListingPaginated {
        data: [ClaimSettlementRecoveryType!]!
        links: [Link!]!
        current_page: Int!
        first_page_url: String!
        from: Int
        to: Int
        total: Int!
        per_page: Int!
        last_page: Int!
        last_page_url: String!
        next_page_url: String
        prev_page_url: String
        path: String
    }

    type ClaimSettlementStatus {
        id: Int!
        uuid: String!
        title: String!
        created_at: String
        updated_at: String
        deleted_at: String
    }

    type ClaimSettlementStatusListingPaginated {
        data: [ClaimSettlementStatus!]!
        links: [Link!]!
        current_page: Int!
        first_page_url: String!
        from: Int
        to: Int
        total: Int!
        per_page: Int!
        last_page: Int!
        last_page_url: String!
        next_page_url: String
        prev_page_url: String
        path: String
    }

    type ClaimSettlementType {
        id: Int!
        uuid: String!
        parent_uuid: String
        title: String!
        accounting_workflow_uuid: String
        created_at: String
        updated_at: String
        deleted_at: String
    }

    type ClaimSettlementTypeListingPaginated {
        data: [ClaimSettlementType!]!
        links: [Link!]!
        current_page: Int!
        first_page_url: String!
        from: Int
        to: Int
        total: Int!
        per_page: Int!
        last_page: Int!
        last_page_url: String!
        next_page_url: String
        prev_page_url: String
        path: String
    }

    type ClaimSettlementType2NotificationTopic {
        id: Int!
        settlement_type_id: Int!
        topic_id: Int!
        notification_type_id: Int!
        created_at: String
        updated_at: String
    }

    type ClaimSettlementType2NotificationTopicListingPaginated {
        data: [ClaimSettlementType2NotificationTopic!]!
        links: [Link!]!
        current_page: Int!
        first_page_url: String!
        from: Int
        to: Int
        total: Int!
        per_page: Int!
        last_page: Int!
        last_page_url: String!
        next_page_url: String
        prev_page_url: String
        path: String
    }

    type ClaimSettlementType2Workflow {
        id: Int!
        settlement_type_id: Int!
        workflow_id: Int!
        is_default: Boolean!
        created_at: String
        updated_at: String
        settlement_type_uuid: String!
        workflow_uuid: String!
    }

    type ClaimSettlementType2WorkflowListingPaginated {
        data: [ClaimSettlementType2Workflow!]!
        links: [Link!]!
        current_page: Int!
        first_page_url: String!
        from: Int
        to: Int
        total: Int!
        per_page: Int!
        last_page: Int!
        last_page_url: String!
        next_page_url: String
        prev_page_url: String
        path: String
    }

    type ClaimSettlementUser2Notification {
        id: Int!
        user_id: Int!
        settlement_id: Int!
        users2topic_id: Int!
        comment: String
        created_at: String
        updated_at: String
    }

    type ClaimSettlementUser2NotificationListingPaginated {
        data: [ClaimSettlementUser2Notification!]!
        links: [Link!]!
        current_page: Int!
        first_page_url: String!
        from: Int
        to: Int
        total: Int!
        per_page: Int!
        last_page: Int!
        last_page_url: String!
        next_page_url: String
        prev_page_url: String
        path: String
    }

    type ClaimStatusListingPaginated {
        data: [ClaimStatus!]!
        links: [Link!]!
        current_page: Int!
        first_page_url: String!
        from: Int
        to: Int
        total: Int!
        per_page: Int!
        last_page: Int!
        last_page_url: String!
        next_page_url: String
        prev_page_url: String
        path: String
    }

    type ClaimStatus2EAV {
        id: Int!
        status_uuid: String!
        eav_object_uuid: String!
        eav_object_revision_uuid: String!
        created_at: String
        updated_at: String
        deleted_at: String
    }

    type ClaimStatus2EAVListingPaginated {
        data: [ClaimStatus2EAV!]!
        links: [Link!]!
        current_page: Int!
        first_page_url: String!
        from: Int
        to: Int
        total: Int!
        per_page: Int!
        last_page: Int!
        last_page_url: String!
        next_page_url: String
        prev_page_url: String
        path: String
    }

    type ClaimType {
        id: Int!
        uuid: String!
        parent_uuid: String
        title: String!
        amount_deductible_default: Float
        amount_loss_adjusters_fee_default: Float
        amount_reserve_default: Float
        created_at: String
        updated_at: String
        deleted_at: String
    }

    type ClaimTypeListingPaginated {
        data: [ClaimType!]!
        links: [Link!]!
        current_page: Int!
        first_page_url: String!
        from: Int
        to: Int
        total: Int!
        per_page: Int!
        last_page: Int!
        last_page_url: String!
        next_page_url: String
        prev_page_url: String
        path: String
    }

    type ClaimType2DefaultValue {
        section_uuids: [String!]!
        id: Int!
        claim_type_uuid: String!
        product_uuid: String!
        amount_default_reserve: Float!
        amount_default_deductible: Float!
        amount_default_loss_adjusters_fee: Float!
        date_effective: String!
        created_at: String
        updated_at: String
    }

    type ClaimType2DefaultValueListingPaginated {
        data: [ClaimType2DefaultValue!]!
        links: [Link!]!
        current_page: Int!
        first_page_url: String!
        from: Int
        to: Int
        total: Int!
        per_page: Int!
        last_page: Int!
        last_page_url: String!
        next_page_url: String
        prev_page_url: String
        path: String
    }

    type ClaimType2DefaultSection {
        id: Int!
        uuid: String!
        claim_type_uuid: String!
        title: String!
        payee_id: Int!
        date_effective: String!
        created_at: String
        updated_at: String
    }

    type ClaimType2DefaultSectionListingPaginated {
        data: [ClaimType2DefaultSection!]!
        links: [Link!]!
        current_page: Int!
        first_page_url: String!
        from: Int
        to: Int
        total: Int!
        per_page: Int!
        last_page: Int!
        last_page_url: String!
        next_page_url: String
        prev_page_url: String
        path: String
    }

    type EAVObjectInCollection {
        object: String!
        override_type_id: Int!
    }

    type TypeWithEAV {
        eav_collection: [EAVObjectInCollection!]!
        id: Int!
        uuid: String!
        parent_uuid: String!
        title: String!
    }

    type TypeWithEAVCollection {
        collection: [TypeWithEAV!]!
    }

    type ClaimType2EAV {
        id: Int!
        claim_type_id: Int!
        claim_type_uuid: String!
        eav_object_uuid: String!
        eav_object_revision_uuid: String!
        override_type_id: Int!
        created_at: String
        updated_at: String
    }

    type ClaimType2EAVListingPaginated {
        data: [ClaimType2EAV!]!
        links: [Link!]!
        current_page: Int!
        first_page_url: String!
        from: Int
        to: Int
        total: Int!
        per_page: Int!
        last_page: Int!
        last_page_url: String!
        next_page_url: String
        prev_page_url: String
        path: String
    }

    type ClaimType2NotificationTopic {
        id: Int!
        claim_type_id: Int!
        claim_subtype_id: Int!
        topic_id: Int!
        notification_type_id: Int!
        created_at: String
        updated_at: String
    }

    type ClaimType2NotificationTopicListingPaginated {
        data: [ClaimType2NotificationTopic!]!
        links: [Link!]!
        current_page: Int!
        first_page_url: String!
        from: Int
        to: Int
        total: Int!
        per_page: Int!
        last_page: Int!
        last_page_url: String!
        next_page_url: String
        prev_page_url: String
        path: String
    }

    type ClaimType2Workflow {
        id: Int!
        type_id: Int!
        workflow_id: Int!
        is_default: Boolean!
        type_uuid: String!
        workflow_uuid: String!
        created_at: String
        updated_at: String
    }

    type ClaimType2WorkflowListingPaginated {
        data: [ClaimType2Workflow!]!
        links: [Link!]!
        current_page: Int!
        first_page_url: String!
        from: Int
        to: Int
        total: Int!
        per_page: Int!
        last_page: Int!
        last_page_url: String!
        next_page_url: String
        prev_page_url: String
        path: String
    }

    type ClaimType2Product {
        id: Int!
        claim_type_uuid: String!
        product_uuid: String!
        created_at: String
        updated_at: String
    }

    type ClaimType2ProductListingPaginated {
        data: [ClaimType2Product!]!
        links: [Link!]!
        current_page: Int!
        first_page_url: String!
        from: Int
        to: Int
        total: Int!
        per_page: Int!
        last_page: Int!
        last_page_url: String!
        next_page_url: String
        prev_page_url: String
        path: String
    }

    type ClaimUser2Notification {
        id: Int!
        user_id: Int!
        claim_id: Int!
        users2topic_id: Int!
        comment: String
        created_at: String
        updated_at: String
    }

    type ClaimUser2NotificationListingPaginated {
        data: [ClaimUser2Notification!]!
        links: [Link!]!
        current_page: Int!
        first_page_url: String!
        from: Int
        to: Int
        total: Int!
        per_page: Int!
        last_page: Int!
        last_page_url: String!
        next_page_url: String
        prev_page_url: String
        path: String
    }

    type ClaimUser2NotificationTopic {
        files: [String!]
        id: Int!
        notification_type_id: Int!
        topic_id: Int!
        date_muted_start: String
        date_muted_end: String
        created_at: String
        updated_at: String
    }

    type ClaimUser2NotificationTopicListingPaginated {
        data: [ClaimUser2NotificationTopic!]!
        links: [Link!]!
        current_page: Int!
        first_page_url: String!
        from: Int
        to: Int
        total: Int!
        per_page: Int!
        last_page: Int!
        last_page_url: String!
        next_page_url: String
        prev_page_url: String
        path: String
    }

    type ClaimUser2SubscribedClaimSettlementStatus {
        id: Int!
        user_id: Int!
        status_id: Int!
        created_at: String
        updated_at: String
    }

    type ClaimUser2SubscribedClaimSettlementStatusListingPaginated {
        data: [ClaimUser2SubscribedClaimSettlementStatus!]!
        links: [Link!]!
        current_page: Int!
        first_page_url: String!
        from: Int
        to: Int
        total: Int!
        per_page: Int!
        last_page: Int!
        last_page_url: String!
        next_page_url: String
        prev_page_url: String
        path: String
    }

    type ClaimUser2SubscribedClaimStatus {
        id: Int!
        user_id: Int!
        status_id: Int!
        created_at: String
        updated_at: String
    }

    type ClaimUser2SubscribedClaimStatusListingPaginated {
        data: [ClaimUser2SubscribedClaimStatus!]!
        links: [Link!]!
        current_page: Int!
        first_page_url: String!
        from: Int
        to: Int
        total: Int!
        per_page: Int!
        last_page: Int!
        last_page_url: String!
        next_page_url: String
        prev_page_url: String
        path: String
    }

    type ClaimWorkflowData {
        logic: Any!
        claims_types2workflows: [ClaimType2Workflow!]!
        claims_settlements_types2workflows: [ClaimSettlementType2Workflow!]!
        id: Int!
        uuid: String!
        created_at: String
        updated_at: String
        deleted_at: String
    }

    type ClaimWorkflowDataListingPaginated {
        data: [ClaimWorkflowData!]!
        links: [Link!]!
        current_page: Int!
        first_page_url: String!
        from: Int
        to: Int
        total: Int!
        per_page: Int!
        last_page: Int!
        last_page_url: String!
        next_page_url: String
        prev_page_url: String
        path: String
    }

    type FieldOption {
        label: String!
        value: String!
    }

    type Field {
        options: [FieldOption!]!
        id: Int!
        field_id: Int!
        name: String!
        label: String!
        type_id: Int!
        type_label: String!
        storage_datatype_id: Int!
        storage_datatype_label: String!
    }

    type EAVDataset {
        fields: [Field!]!
        id: Int!
        revision_id: Int!
        uuid: String!
        revision_uuid: String!
        title: String!
        is_multi: Boolean!
    }

    type EAVObject {
        datasets: [EAVDataset!]!
        title: String!
        uuid: String!
    }

    type EAVObjectMetadata {
        id: Int!
        revision_id: Int!
        location_id: Int!
        deleted: Boolean!
        created_at: String!
        identifier: String!
        title: String!
        description: String!
        template: String!
    }

    type EAVObjectDefinition {
        metadata: EAVObjectMetadata!
        datasets: [EAVDataset!]!
        r2ms: Any!
    }

    type DatabaseInfo {
        connection: String!
        host: String!
        username: String!
        database: String!
        driver: String!
    }

    type DatabasesConnected {
        databases: [DatabaseInfo!]!
    }

    type StepData {
        icon: String
        step: Int!
        title: String!
        complete: Boolean!
        componentName: String!
    }

    type StepMetadata {
        steps: [StepData!]!
        title: String!
        errorCount: Int!
    }

    type Step {
        data: [StepMetadata!]!
        title: String!
    }

    type Stepper {
        product_stepper: [Step!]!
        title: String!
        renderingComponent: String!
        target_price: String!
        quoteNetDownActive: Boolean
    }
`;

module.exports = {schema};