const config = require('../../config');

const {EAV} = require('./e-a-v/e-a-v.js');
const {Claims} = require('./claims/claims.js');
const {InfoApiV1} = require('./info-api-v1/info-api-v1.js');
const {ClaimsLogs} = require('./claims-logs/claims-logs.js');
const {ClaimsTypes} = require('./claims-types/claims-types.js');
const {ClaimsComments} = require('./claims-comments/claims-comments.js');
const {ClaimsStatuses} = require('./claims-statuses/claims-statuses.js');
const {ProductStepper} = require('./product-stepper/product-stepper.js');
const {Claims2Sections} = require('./claims2-sections/claims2-sections.js');
const {ClaimsWorkflows} = require('./claims-workflows/claims-workflows.js');
const {ClaimsSettlements} = require('./claims-settlements/claims-settlements.js');
const {ClaimsTypes2EAVs} = require('./claims-types2-e-a-vs/claims-types2-e-a-vs.js');
const {ClaimsTypes2Products} = require('./claims-types2-products/claims-types2-products.js');
const {ClaimsStatuses2EAVs} = require('./claims-statuses2-e-a-vs/claims-statuses2-e-a-vs.js');
const {ClaimsSettlementsLogs} = require('./claims-settlements-logs/claims-settlements-logs.js');
const {ClaimsTypes2Workflows} = require('./claims-types2-workflows/claims-types2-workflows.js');
const {ClaimsSettlementsTypes} = require('./claims-settlements-types/claims-settlements-types.js');
const {ClaimsSettlements2Files} = require('./claims-settlements2-files/claims-settlements2-files.js');
const {ClaimsNotificationsTypes} = require('./claims-notifications-types/claims-notifications-types.js');
const {ClaimsNotificationsTopics} = require('./claims-notifications-topics/claims-notifications-topics.js');
const {ClaimsSettlementsStatuses} = require('./claims-settlements-statuses/claims-settlements-statuses.js');
const {ClaimsUsers2Notifications} = require('./claims-users2-notifications/claims-users2-notifications.js');
const {ClaimsTypes2DefaultValues} = require('./claims-types2-default-values/claims-types2-default-values.js');
const {ClaimsSettlementsRecoveries} = require('./claims-settlements-recoveries/claims-settlements-recoveries.js');
const {ClaimsTypes2DefaultSections} = require('./claims-types2-default-sections/claims-types2-default-sections.js');
const {ClaimsNotificationsTemplates} = require('./claims-notifications-templates/claims-notifications-templates.js');
const {ClaimsTypes2NotificationsTopics} = require('./claims-types2-notifications-topics/claims-types2-notifications-topics.js');
const {ClaimsUsers2NotificationsTopics} = require('./claims-users2-notifications-topics/claims-users2-notifications-topics.js');
const {ClaimsSettlementsRecoveriesTypes} = require('./claims-settlements-recoveries-types/claims-settlements-recoveries-types.js');
const {ClaimsSettlementsTypes2Workflows} = require('./claims-settlements-types2-workflows/claims-settlements-types2-workflows.js');
const {ClaimsNotificationsScheduledTasks} = require('./claims-notifications-scheduled-tasks/claims-notifications-scheduled-tasks.js');
const {ClaimsSettlementsPaymentsTemplates} = require('./claims-settlements-payments-templates/claims-settlements-payments-templates.js');
const {ClaimsSettlementsRecoveriesStatuses} = require('./claims-settlements-recoveries-statuses/claims-settlements-recoveries-statuses.js');
const {ClaimsSettlementsUsers2Notifications} = require('./claims-settlements-users2-notifications/claims-settlements-users2-notifications.js');
const {ClaimsUsers2SubscribedClaimsStatuses} = require('./claims-users2-subscribed-claims-statuses/claims-users2-subscribed-claims-statuses.js');
const {ClaimsSettlementsNotificationsTemplates} = require('./claims-settlements-notifications-templates/claims-settlements-notifications-templates.js');
const {ClaimsSettlementsTypes2NotificationsTopics} = require('./claims-settlements-types2-notifications-topics/claims-settlements-types2-notifications-topics.js');
const {ClaimsSettlements2ClaimsSettlementsRecoveries} = require('./claims-settlements2-claims-settlements-recoveries/claims-settlements2-claims-settlements-recoveries.js');
const {ClaimsUsers2SubscribedClaimsSettlementsStatuses} = require('./claims-users2-subscribed-claims-settlements-statuses/claims-users2-subscribed-claims-settlements-statuses.js');

const dataSources = () => {
    return {
        eAV: new EAV(config.claims.apiUrl),
        claims: new Claims(config.claims.apiUrl),
        infoApiV1: new InfoApiV1(config.claims.apiUrl),
        claimsLogs: new ClaimsLogs(config.claims.apiUrl),
        claimsTypes: new ClaimsTypes(config.claims.apiUrl),
        claimsComments: new ClaimsComments(config.claims.apiUrl),
        claimsStatuses: new ClaimsStatuses(config.claims.apiUrl),
        productStepper: new ProductStepper(config.claims.apiUrl),
        claims2Sections: new Claims2Sections(config.claims.apiUrl),
        claimsWorkflows: new ClaimsWorkflows(config.claims.apiUrl),
        claimsTypes2EAVs: new ClaimsTypes2EAVs(config.claims.apiUrl),
        claimsSettlements: new ClaimsSettlements(config.claims.apiUrl),
        claimsStatuses2EAVs: new ClaimsStatuses2EAVs(config.claims.apiUrl),
        claimsTypes2Products: new ClaimsTypes2Products(config.claims.apiUrl),
        claimsSettlementsLogs: new ClaimsSettlementsLogs(config.claims.apiUrl),
        claimsTypes2Workflows: new ClaimsTypes2Workflows(config.claims.apiUrl),
        claimsSettlementsTypes: new ClaimsSettlementsTypes(config.claims.apiUrl),
        claimsSettlements2Files: new ClaimsSettlements2Files(config.claims.apiUrl),
        claimsNotificationsTypes: new ClaimsNotificationsTypes(config.claims.apiUrl),
        claimsNotificationsTopics: new ClaimsNotificationsTopics(config.claims.apiUrl),
        claimsSettlementsStatuses: new ClaimsSettlementsStatuses(config.claims.apiUrl),
        claimsTypes2DefaultValues: new ClaimsTypes2DefaultValues(config.claims.apiUrl),
        claimsUsers2Notifications: new ClaimsUsers2Notifications(config.claims.apiUrl),
        claimsSettlementsRecoveries: new ClaimsSettlementsRecoveries(config.claims.apiUrl),
        claimsTypes2DefaultSections: new ClaimsTypes2DefaultSections(config.claims.apiUrl),
        claimsNotificationsTemplates: new ClaimsNotificationsTemplates(config.claims.apiUrl),
        claimsTypes2NotificationsTopics: new ClaimsTypes2NotificationsTopics(config.claims.apiUrl),
        claimsUsers2NotificationsTopics: new ClaimsUsers2NotificationsTopics(config.claims.apiUrl),
        claimsSettlementsRecoveriesTypes: new ClaimsSettlementsRecoveriesTypes(config.claims.apiUrl),
        claimsSettlementsTypes2Workflows: new ClaimsSettlementsTypes2Workflows(config.claims.apiUrl),
        claimsNotificationsScheduledTasks: new ClaimsNotificationsScheduledTasks(config.claims.apiUrl),
        claimsSettlementsPaymentsTemplates: new ClaimsSettlementsPaymentsTemplates(config.claims.apiUrl),
        claimsSettlementsRecoveriesStatuses: new ClaimsSettlementsRecoveriesStatuses(config.claims.apiUrl),
        claimsSettlementsUsers2Notifications: new ClaimsSettlementsUsers2Notifications(config.claims.apiUrl),
        claimsUsers2SubscribedClaimsStatuses: new ClaimsUsers2SubscribedClaimsStatuses(config.claims.apiUrl),
        claimsSettlementsNotificationsTemplates: new ClaimsSettlementsNotificationsTemplates(config.claims.apiUrl),
        claimsSettlementsTypes2NotificationsTopics: new ClaimsSettlementsTypes2NotificationsTopics(config.claims.apiUrl),
        claimsSettlements2ClaimsSettlementsRecoveries: new ClaimsSettlements2ClaimsSettlementsRecoveries(config.claims.apiUrl),
        claimsUsers2SubscribedClaimsSettlementsStatuses: new ClaimsUsers2SubscribedClaimsSettlementsStatuses(config.claims.apiUrl)
    }
};

module.exports = {dataSources};